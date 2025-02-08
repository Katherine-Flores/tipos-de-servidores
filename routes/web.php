<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ServerController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/registro-form', [AuthController::class, 'registroForm'])->name('registro-form');
    Route::post('/registro', [AuthController::class, 'registro'])->name('registro');
});

Route::middleware('guest')->group(function () {
    Route::get('/login-form', [AuthController::class, 'loginForm'])->name('login-form');
    Route::post('/login', [AuthController::class, 'loginWeb'])->name('login');
});

Route::post('/logout', [AuthController::class, 'logoutWeb'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [ServerController::class, 'dashboard'])->name('dashboard');
    Route::get('/servidores', [ServerController::class, 'index'])->name('servidores');
    Route::get('/servidor/{id}', [ServerController::class, 'show'])->name('servidor');
});
