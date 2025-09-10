<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Services\WhoisWhmcsService;

class DomainController extends Controller
{
    protected $whmcsService;

    public function __construct(WhoisWhmcsService $whmcsService)
    {
        $this->whmcsService = $whmcsService;
    }

    /**
     * Check domain availability using WHMCS API
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

        if ($requests >= 300) { // Max 30 requests per minute
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
            // Use WHMCS API for domain availability checking
            $result = $this->whmcsService->checkDomainAvailability($domain);

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
            \Log::error('WHMCS domain check failed', [
                'domain' => $domain,
                'error' => $e->getMessage()
            ]);

            return response()->json([
                'success' => false,
                'domain' => $domain,
                'error' => 'Възникна грешка при проверката на домейна',
                'message' => 'Моля, опитайте отново по-късно'
            ], 500);
        }
    }

    /**
     * Get domain suggestions using WHMCS API
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

        try {
            // Use WHMCS domain suggestions
            $suggestions = $this->whmcsService->getDomainSuggestions($query);

            return response()->json([
                'success' => true,
                'suggestions' => array_slice($suggestions, 0, 10)
            ]);
        } catch (\Exception $e) {
            \Log::error('WHMCS suggestions failed', [
                'query' => $query,
                'error' => $e->getMessage()
            ]);

            return response()->json([
                'success' => false,
                'error' => 'Failed to fetch domain suggestions',
                'message' => 'Please try again later'
            ], 500);
        }
    }

    /**
     * Get domain pricing from WHMCS
     */
    public function getPricing(Request $request): JsonResponse
    {
        $tld = $request->input('tld');

        try {
            $pricing = $this->whmcsService->getDomainPricing($tld);

            return response()->json([
                'success' => true,
                'pricing' => $pricing
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => 'Failed to fetch pricing information',
                'message' => 'Please try again later'
            ], 500);
        }
    }
}
