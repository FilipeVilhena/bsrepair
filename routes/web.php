<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WindowsKeyController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
// Use the WindowsKeyController for better structure and maintainability
Route::get('/windows_keys/create', function () {
    return view('windows_keys.create');
})->name('windows_keys.create');
