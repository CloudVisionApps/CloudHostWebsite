<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class WhoisWhmcsService
{
    protected $apiUrl;
    protected $apiIdentifier;
    protected $apiSecret;
    protected $apiAccessKey;
    protected $timeout;

    public function __construct()
    {
        $this->apiUrl = config('services.whmcs.api_url');
        $this->apiIdentifier = config('services.whmcs.api_identifier');
        $this->apiSecret = config('services.whmcs.api_secret');
        $this->timeout = config('services.whmcs.timeout', 30);
    }

    /**
     * Check if a domain is available for registration using WHMCS API
     */
    public function checkDomainAvailability(string $domain): array
    {
        // Clean the domain name
        $domain = strtolower(trim($domain));

        // Validate domain format
        if (!$this->isValidDomain($domain)) {
            throw new \InvalidArgumentException('Invalid domain format');
        }

        // Extract TLD
        $tld = $this->extractTld($domain);

        try {
            // Use WHMCS DomainWhois API
            $result = $this->callWhmcsApi('DomainWhois', [
                'domain' => $domain
            ]);

            // Check for WHMCS API errors
            if (isset($result['result']) && $result['result'] === 'error') {
                throw new \Exception('WHMCS API error: ' . ($result['message'] ?? 'Unknown error'));
            }

            return $this->parseWhmcsResponse($result, $domain);

        } catch (\Exception $e) {
            Log::error('WHMCS domain check failed', [
                'domain' => $domain,
                'error' => $e->getMessage()
            ]);

            throw $e; // Re-throw the exception instead of falling back
        }
    }

    /**
     * Get domain pricing from WHMCS
     */
    public function getDomainPricing(string $tld = null): array
    {
        try {
            $params = [];
            if ($tld) {
                $params['tld'] = $tld;
            }

            $result = $this->callWhmcsApi('GetTLDPricing', $params);

            // Check for WHMCS API errors
            if (isset($result['result']) && $result['result'] === 'error') {
                throw new \Exception('WHMCS API error: ' . ($result['message'] ?? 'Unknown error'));
            }

            return $result['pricing'] ?? [];

        } catch (\Exception $e) {
            Log::error('WHMCS pricing check failed', [
                'tld' => $tld,
                'error' => $e->getMessage()
            ]);

            return [];
        }
    }

    /**
     * Get domain suggestions from WHMCS
     */
    public function getDomainSuggestions(string $domain): array
    {
        try {
            $result = $this->callWhmcsApi('DomainSuggest', [
                'domain' => $domain
            ]);

            // Check for WHMCS API errors
            if (isset($result['result']) && $result['result'] === 'error') {
                throw new \Exception('WHMCS API error: ' . ($result['message'] ?? 'Unknown error'));
            }

            return $result['suggestions'] ?? [];

        } catch (\Exception $e) {
            Log::error('WHMCS domain suggestions failed', [
                'domain' => $domain,
                'error' => $e->getMessage()
            ]);

            return [];
        }
    }

    /**
     * Get alternative domain suggestions when a domain is not available
     * Uses only WHMCS API suggestions
     */
    public function getAlternativeSuggestions(string $domain): array
    {
        try {
            $whmcsSuggestions = $this->getDomainSuggestions($domain);
            if (!empty($whmcsSuggestions)) {
                Log::debug('Using WHMCS API suggestions', [
                    'domain' => $domain,
                    'suggestions_count' => count($whmcsSuggestions)
                ]);
                return array_slice($whmcsSuggestions, 0, 10);
            }
        } catch (\Exception $e) {
            Log::warning('WHMCS suggestions failed', [
                'domain' => $domain,
                'error' => $e->getMessage()
            ]);
        }

        // Return empty array if WHMCS doesn't provide suggestions
        return [];
    }

    /**
     * Get alternative suggestions with source information
     * Uses only WHMCS API suggestions
     */
    public function getAlternativeSuggestionsWithSource(string $domain): array
    {
        try {
            $whmcsSuggestions = $this->getDomainSuggestions($domain);
            if (!empty($whmcsSuggestions)) {
                Log::debug('Using WHMCS API suggestions', [
                    'domain' => $domain,
                    'suggestions_count' => count($whmcsSuggestions)
                ]);
                return [
                    'suggestions' => array_slice($whmcsSuggestions, 0, 10),
                    'source' => 'whmcs'
                ];
            }
        } catch (\Exception $e) {
            Log::warning('WHMCS suggestions failed', [
                'domain' => $domain,
                'error' => $e->getMessage()
            ]);
        }

        // Return empty suggestions if WHMCS doesn't provide any
        return [
            'suggestions' => [],
            'source' => 'whmcs'
        ];
    }


    /**
     * Call WHMCS API
     */
    public function callWhmcsApi(string $action, array $params = []): array
    {
        if (!$this->isConfigured()) {
            throw new \Exception('WHMCS API not configured');
        }

        $postData = [
            'action' => $action,
            'username' => $this->apiIdentifier,
            'password' => $this->apiSecret,
            'responsetype' => 'json',
        ];

        // Merge additional parameters
        $postData = array_merge($postData, $params);

        $response = Http::timeout($this->timeout)
            ->asForm()
            ->post($this->apiUrl, $postData);

        if (!$response->successful()) {
            $errorBody = $response->body();
            Log::error('WHMCS API Error', [
                'status' => $response->status(),
                'body' => $errorBody,
                'action' => $action,
                'url' => $this->apiUrl
            ]);
            throw new \Exception('WHMCS API request failed: ' . $response->status() . ' - ' . $errorBody);
        }

        $data = $response->json();

        // Log the response for debugging
        Log::debug('WHMCS API Response', [
            'action' => $action,
            'response' => $data
        ]);

        if (isset($data['result']) && $data['result'] === 'error') {
            throw new \Exception('WHMCS API error: ' . ($data['message'] ?? 'Unknown error'));
        }

        return $data;
    }

    /**
     * Parse WHMCS domain whois response
     */
    protected function parseWhmcsResponse(array $result, string $domain): array
    {
        // WHMCS DomainWhois API returns different structure
        // Check for common WHMCS response patterns
        $whoisData = $result['whois'] ?? $result['raw'] ?? '';
        $status = $result['status'] ?? $result['result'] ?? '';

        // Log the parsed data for debugging
        Log::debug('Parsing WHMCS response', [
            'domain' => $domain,
            'whois_data_length' => strlen($whoisData),
            'status' => $status,
            'result_keys' => array_keys($result)
        ]);

        // Check if domain is available
        $isAvailable = $this->isDomainAvailable($whoisData, $status);

        $expiryDate = null;
        $registrar = null;

        if (!$isAvailable) {
            // Extract expiry date from WHOIS data
            $expiryDate = $this->extractExpiryDate($whoisData);

            // Extract registrar from WHOIS data
            $registrar = $this->extractRegistrar($whoisData);
        }

        return [
            'available' => $isAvailable,
            'expiry_date' => $expiryDate,
            'registrar' => $registrar,
            'whois_data' => $whoisData,
            'status' => $status
        ];
    }

    /**
     * Determine if domain is available based on WHOIS data and status
     */
    protected function isDomainAvailable(string $whoisData, string $status): bool
    {
        $whoisData = strtolower($whoisData);

        // Common patterns that indicate domain is NOT available
        $notAvailablePatterns = [
            'no match',
            'not found',
            'no entries found',
            'no data found',
            'no matching record',
            'status: active',
            'status: registered',
            'domain status: active',
            'domain status: registered',
            'creation date:',
            'created:',
            'registered:',
            'registration date:',
            'expiry date:',
            'expires:',
            'expire:',
            'expiration date:',
            'registrar:',
            'sponsoring registrar:',
            'registrant:',
            'admin:',
            'tech:',
            'billing:',
            'name server:',
            'nameserver:',
            'dns:',
        ];

        // Check status first
        if (in_array(strtolower($status), ['registered', 'active', 'ok'])) {
            return false;
        }

        // Check WHOIS data patterns
        foreach ($notAvailablePatterns as $pattern) {
            if (strpos($whoisData, $pattern) !== false) {
                return false;
            }
        }

        return true;
    }

    /**
     * Extract expiry date from WHOIS data
     */
    protected function extractExpiryDate(string $whoisData): ?string
    {
        if (preg_match('/(?:expiry|expires?|expiration).*?(\d{4}-\d{2}-\d{2})/i', $whoisData, $matches)) {
            return $matches[1];
        } elseif (preg_match('/(?:expiry|expires?|expiration).*?(\d{2}\/\d{2}\/\d{4})/i', $whoisData, $matches)) {
            return date('Y-m-d', strtotime($matches[1]));
        }

        return null;
    }

    /**
     * Extract registrar from WHOIS data
     */
    protected function extractRegistrar(string $whoisData): ?string
    {
        if (preg_match('/(?:registrar|sponsoring registrar):\s*(.+)/i', $whoisData, $matches)) {
            return trim($matches[1]);
        }

        return null;
    }


    /**
     * Validate domain format
     */
    protected function isValidDomain(string $domain): bool
    {
        return filter_var($domain, FILTER_VALIDATE_DOMAIN, FILTER_FLAG_HOSTNAME) !== false;
    }

    /**
     * Extract TLD from domain
     */
    protected function extractTld(string $domain): string
    {
        $parts = explode('.', $domain);
        return '.' . end($parts);
    }

    /**
     * Check if WHMCS is properly configured
     */
    protected function isConfigured(): bool
    {
        return !empty($this->apiUrl) &&
               !empty($this->apiIdentifier) &&
               !empty($this->apiSecret);
    }
}
