<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use xPaw\MinecraftPing;
use App\Http\Controllers\CheckDiscordServer;

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
require __DIR__.'/auth.php';
