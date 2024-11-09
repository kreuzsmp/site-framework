<?php
use Illuminate\Support\Facades\Route;

Route::name('socials.')->group(function () {
    Route::get('/discord', function () {
        return redirect()->away('https://discord.gg/Fz5Sfhjr3F');
    })->name('discord-server');

    Route::get('/tiktok', function () {
        return redirect()->away('https://www.tiktok.com/@kreuz_smp?_t=8qqPCMiVVXG&_r=1');
    })->name('tiktok');

    Route::get('/wiki', function () {
        return redirect()->away('https://wiki.kreuzsmp.ru');
    })->name('wiki');

    Route::get('/youtube', function () {
        return redirect()->away('https://www.youtube.com/@Kreuz_SMP');
    })->name('youtube');

    Route::get('/telegram', function () {
        return redirect()->away('https://t.me/kreuz_smp');
    })->name('telegram');

});
