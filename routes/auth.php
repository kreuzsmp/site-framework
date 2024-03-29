<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiscordAuthorizationController;
use App\Http\Controllers\CheckDiscordServer;
use App\Http\Controllers\MainController;

Route::middleware('guest')->group(function() {
    Route::get('/login/', [DiscordAuthorizationController::class, 'create'])->name('login');

    Route::get('/login/callback', [DiscordAuthorizationController::class, 'store']);

});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [DiscordAuthorizationController::class, 'destroy']);

    Route::get('/dashboard', [MainController::class, 'dashboard'])->name('dashboard');

    Route::get('/check-ds', [CheckDiscordServer::class, 'ret']);
    Route::get('/dashboard/form', [CheckDiscordServer::class, 'form']);

    Route::post('/dashboard/buy', [MainController::class, 'payment']);
    Route::get('/successbuy', [MainController::class, 'success'])->name('successbuy');
});
