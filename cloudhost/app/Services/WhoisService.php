<?php

namespace App\Services;

class WhoisService
{
    /**
     * Check if a domain is available for registration
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
        
        // Get WHOIS server for the TLD
        $whoisServer = $this->getWhoisServer($tld);
        
        if (!$whoisServer) {
            // For unsupported TLDs, return a generic response
            return [
                'available' => false,
                'expiry_date' => null,
                'registrar' => 'Unsupported TLD',
            ];
        }

        try {
            // Perform WHOIS lookup
            $whoisData = $this->performWhoisLookup($domain, $whoisServer);
            
            // Parse WHOIS data to determine availability
            $result = $this->parseWhoisData($whoisData, $domain);
            
            return $result;
        } catch (\Exception $e) {
            // If WHOIS lookup fails, return a generic unavailable response
            return [
                'available' => false,
                'expiry_date' => null,
                'registrar' => 'WHOIS lookup failed',
            ];
        }
    }

    /**
     * Validate domain format
     */
    private function isValidDomain(string $domain): bool
    {
        return filter_var($domain, FILTER_VALIDATE_DOMAIN, FILTER_FLAG_HOSTNAME) !== false;
    }

    /**
     * Extract TLD from domain
     */
    private function extractTld(string $domain): string
    {
        $parts = explode('.', $domain);
        return '.' . end($parts);
    }

    /**
     * Get WHOIS server for TLD
     */
    private function getWhoisServer(string $tld): ?string
    {
        $whoisServers = [
            '.com' => 'whois.verisign-grs.com',
            '.net' => 'whois.verisign-grs.com',
            '.org' => 'whois.pir.org',
            '.info' => 'whois.afilias.net',
            '.biz' => 'whois.biz',
            '.us' => 'whois.nic.us',
            '.uk' => 'whois.nominet.uk',
            '.de' => 'whois.denic.de',
            '.fr' => 'whois.afnic.fr',
            '.it' => 'whois.nic.it',
            '.es' => 'whois.nic.es',
            '.nl' => 'whois.domain-registry.nl',
            '.be' => 'whois.dns.be',
            '.at' => 'whois.nic.at',
            '.ch' => 'whois.nic.ch',
            '.se' => 'whois.iis.se',
            '.no' => 'whois.norid.no',
            '.dk' => 'whois.dk-hostmaster.dk',
            '.fi' => 'whois.fi',
            '.pl' => 'whois.dns.pl',
            '.cz' => 'whois.nic.cz',
            '.sk' => 'whois.sk-nic.sk',
            '.hu' => 'whois.nic.hu',
            '.ro' => 'whois.rotld.ro',
            '.bg' => 'whois.register.bg',
            '.hr' => 'whois.dns.hr',
            '.si' => 'whois.arnes.si',
            '.lt' => 'whois.domreg.lt',
            '.lv' => 'whois.nic.lv',
            '.ee' => 'whois.eenet.ee',
            '.ru' => 'whois.tcinet.ru',
            '.ua' => 'whois.ua',
            '.by' => 'whois.cctld.by',
            '.kz' => 'whois.nic.kz',
            '.eu' => 'whois.eu',
            '.io' => 'whois.nic.io',
            '.co' => 'whois.nic.co',
            '.me' => 'whois.nic.me',
            '.tv' => 'whois.tv',
            '.cc' => 'whois.nic.cc',
            '.mobi' => 'whois.dotmobiregistry.net',
            '.name' => 'whois.nic.name',
            '.pro' => 'whois.registrypro.pro',
            '.aero' => 'whois.information.aero',
            '.coop' => 'whois.nic.coop',
            '.museum' => 'whois.museum',
            '.travel' => 'whois.nic.travel',
            '.jobs' => 'whois.nic.jobs',
            '.cat' => 'whois.cat',
            '.tel' => 'whois.nic.tel',
            '.asia' => 'whois.nic.asia',
            '.post' => 'whois.dotpostregistry.net',
            '.xxx' => 'whois.nic.xxx',
            '.xyz' => 'whois.nic.xyz',
            '.online' => 'whois.nic.online',
            '.site' => 'whois.nic.site',
            '.store' => 'whois.nic.store',
            '.tech' => 'whois.nic.tech',
            '.app' => 'whois.nic.google',
            '.dev' => 'whois.nic.google',
            '.ai' => 'whois.nic.ai',
            '.ly' => 'whois.nic.ly',
            '.to' => 'whois.tonic.to',
            '.tk' => 'whois.dot.tk',
            '.ml' => 'whois.dot.ml',
            '.ga' => 'whois.dot.ga',
            '.cf' => 'whois.dot.cf',
        ];

        return $whoisServers[$tld] ?? null;
    }

    /**
     * Perform WHOIS lookup
     */
    private function performWhoisLookup(string $domain, string $whoisServer): string
    {
        $timeout = 10; // seconds
        
        // Try to use fsockopen first
        $connection = @fsockopen($whoisServer, 43, $errno, $errstr, $timeout);
        
        if (!$connection) {
            // Fallback to cURL if fsockopen fails
            return $this->performWhoisLookupWithCurl($domain, $whoisServer);
        }

        fwrite($connection, $domain . "\r\n");
        $response = '';
        
        while (!feof($connection)) {
            $response .= fgets($connection, 1024);
        }
        
        fclose($connection);
        
        return $response;
    }

    /**
     * Fallback WHOIS lookup using cURL
     */
    private function performWhoisLookupWithCurl(string $domain, string $whoisServer): string
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://$whoisServer:43");
        curl_setopt($ch, CURLOPT_PORT, 43);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $domain . "\r\n");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; DomainChecker/1.0)');
        
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error = curl_error($ch);
        curl_close($ch);
        
        if ($response === false || !empty($error)) {
            throw new \Exception("WHOIS lookup failed: $error");
        }
        
        return $response;
    }

    /**
     * Parse WHOIS data to determine availability
     */
    private function parseWhoisData(string $whoisData, string $domain): array
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

        // Check if domain is available (not registered)
        $isAvailable = true;
        $expiryDate = null;
        $registrar = null;

        foreach ($notAvailablePatterns as $pattern) {
            if (strpos($whoisData, $pattern) !== false) {
                $isAvailable = false;
                break;
            }
        }

        // If domain is not available, try to extract additional info
        if (!$isAvailable) {
            // Extract expiry date
            if (preg_match('/(?:expiry|expires?|expiration).*?(\d{4}-\d{2}-\d{2})/i', $whoisData, $matches)) {
                $expiryDate = $matches[1];
            } elseif (preg_match('/(?:expiry|expires?|expiration).*?(\d{2}\/\d{2}\/\d{4})/i', $whoisData, $matches)) {
                $expiryDate = date('Y-m-d', strtotime($matches[1]));
            }

            // Extract registrar
            if (preg_match('/(?:registrar|sponsoring registrar):\s*(.+)/i', $whoisData, $matches)) {
                $registrar = trim($matches[1]);
            }
        }

        return [
            'available' => $isAvailable,
            'expiry_date' => $expiryDate,
            'registrar' => $registrar,
        ];
    }
}
