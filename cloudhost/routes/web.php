<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\DomainController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/plans/{group}', function ($group) {
    return view('plans', compact('group'));
})->name('plans.index');

Route::get('/domains', function () {
    return view('domains');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

// Newsletter routes
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');
Route::post('/newsletter/unsubscribe', [NewsletterController::class, 'unsubscribe'])->name('newsletter.unsubscribe');

// Domain routes
Route::post('/domains/check-availability', [DomainController::class, 'checkAvailability'])->name('domains.check-availability');
Route::get('/domains/suggestions', [DomainController::class, 'getSuggestions'])->name('domains.suggestions');
