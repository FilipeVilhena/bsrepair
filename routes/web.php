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
Route::get('/windows_keys', [WindowsKeyController::class, 'index'])->name('windows_keys.index');
Route::get('/windows_keys/create', [WindowsKeyController::class, 'create'])->name('windows_keys.create');
Route::get('/windows_keys/{id}', [WindowsKeyController::class, 'show'])->name('windows_keys.show');
