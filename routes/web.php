<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/test', function () {
    return response()->json([
        'status' => '1',
        'message' => 'API working',
        'timestamp' => now(),
    ]);
});