<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
            'name' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Моля, въведете валиден имейл адрес.',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Check if email already exists
            $existingSubscriber = NewsletterSubscriber::where('email', $request->email)->first();
            
            if ($existingSubscriber) {
                if ($existingSubscriber->is_subscribed) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Този имейл адрес вече е абониран за нашия бюлетин.'
                    ], 409);
                } else {
                    // Reactivate subscription
                    $existingSubscriber->update([
                        'is_subscribed' => true,
                        'name' => $request->name ?? $existingSubscriber->name
                    ]);
                }
            } else {
                // Create new subscription
                NewsletterSubscriber::create([
                    'email' => $request->email,
                    'name' => $request->name,
                    'is_subscribed' => true
                ]);
            }

            return response()->json([
                'success' => true,
                'message' => 'Успешно се абонирахте за нашия бюлетин! Благодарим ви.'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Възникна грешка при обработката на заявката. Моля, опитайте отново.'
            ], 500);
        }
    }

    public function unsubscribe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Моля, въведете валиден имейл адрес.',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $subscriber = NewsletterSubscriber::where('email', $request->email)->first();
            
            if (!$subscriber) {
                return response()->json([
                    'success' => false,
                    'message' => 'Този имейл адрес не е намерен в нашата база данни.'
                ], 404);
            }

            $subscriber->update(['is_subscribed' => false]);

            return response()->json([
                'success' => true,
                'message' => 'Успешно се отписахте от нашия бюлетин.'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Възникна грешка при обработката на заявката. Моля, опитайте отново.'
            ], 500);
        }
    }
}
