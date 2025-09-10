<?php

namespace App\Http\Controllers;

use App\Models\ContactFormEntry;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'subject' => 'required|string|max:255',
            'priority' => 'nullable|string|in:low,medium,high,urgent',
            'service_type' => 'nullable|string|in:hosting,domain,vps,dedicated,ssl,other',
            'message' => 'required|string|max:2000',
            'department' => 'required|string|in:support,sales'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Моля, попълнете всички задължителни полета правилно.',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $contactEntry = ContactFormEntry::create($validator->validated());

            return response()->json([
                'success' => true,
                'message' => 'Съобщението е изпратено успешно! Ще се свържем с вас възможно най-скоро.',
                'data' => [
                    'id' => $contactEntry->id,
                    'department' => $contactEntry->department
                ]
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Възникна грешка при изпращането на съобщението. Моля, опитайте отново.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
