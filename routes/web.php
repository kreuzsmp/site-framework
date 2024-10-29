<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//

Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('/kreuzplus', [MainController::class, 'sub'])->name('kreuzplus');
Route::get('/discord', function () {
    return redirect()->away('https://discord.gg/Fz5Sfhjr3F');
})->name('discord-server');
require __DIR__.'/auth.php';
