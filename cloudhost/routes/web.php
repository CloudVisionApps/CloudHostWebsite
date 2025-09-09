<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/plans/{group}', function ($group) {
    return view('plans', compact('group'));
})->name('plans.index');


Route::get('/domains', function () {
    return view('domains');
});
