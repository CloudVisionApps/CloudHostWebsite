<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Services\WhoisService;

class DomainController extends Controller
{
    protected $whoisService;

    public function __construct(WhoisService $whoisService)
    {
        $this->whoisService = $whoisService;
    }

    /**
     * Check domain availability using WHOIS
     */
    public function checkAvailability(Request $request): JsonResponse
    {
        $request->validate([
            'domain' => 'required|string|max:255|regex:/^[a-zA-Z0-9][a-zA-Z0-9-]{0,61}[a-zA-Z0-9]?\.[a-zA-Z]{2,}$/'
        ]);

        $domain = strtolower(trim($request->input('domain')));

        // Simple rate limiting - check if user has made too many requests
        $cacheKey = 'domain_check_' . $request->ip();
        $requests = cache()->get($cacheKey, 0);

        if ($requests >= 30) { // Max 10 requests per minute
            return response()->json([
                'success' => false,
                'domain' => $domain,
                'error' => 'Твърде много заявки',
                'message' => 'Моля, изчакайте малко преди да опитате отново'
            ], 429);
        }

        // Increment request counter
        cache()->put($cacheKey, $requests + 1, 60); // 1 minute cache

        try {
            $result = $this->whoisService->checkDomainAvailability($domain);

            return response()->json([
                'success' => true,
                'domain' => $domain,
                'available' => $result['available'],
                'expiry_date' => $result['expiry_date'],
                'registrar' => $result['registrar'],
                'message' => $result['available']
                    ? 'Домейнът е наличен за регистрация'
                    : 'Домейнът е зает'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'domain' => $domain,
                'error' => 'Възникна грешка при проверката на домейна',
                'message' => 'Моля, опитайте отново по-късно'
            ], 500);
        }
    }

    /**
     * Get domain suggestions based on search query
     */
    public function getSuggestions(Request $request): JsonResponse
    {
        $query = strtolower(trim($request->input('q', '')));

        if (strlen($query) < 2) {
            return response()->json([
                'success' => true,
                'suggestions' => []
            ]);
        }

        // Extract domain name and TLD
        $parts = explode('.', $query);
        if (count($parts) < 2) {
            return response()->json([
                'success' => true,
                'suggestions' => []
            ]);
        }

        $domainName = $parts[0];
        $tld = '.' . $parts[1];

        // Get available TLDs from database
        $availableTlds = \App\Models\Domain::pluck('tld')->toArray();

        $suggestions = [];
        foreach ($availableTlds as $availableTld) {
            if (strpos($availableTld, $tld) !== false) {
                $suggestions[] = [
                    'domain' => $domainName . $availableTld,
                    'tld' => $availableTld,
                    'type' => 'tld_suggestion'
                ];
            }
        }

        return response()->json([
            'success' => true,
            'suggestions' => array_slice($suggestions, 0, 10)
        ]);
    }
}
