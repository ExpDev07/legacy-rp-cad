<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Logging out.
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

// Guest routes.
Route::middleware('guest')->group(static function ()
{
    // Register.
    Route::get('/register', [RegisterController::class, 'render'])->name('register');

    // Login routes.
    Route::name('login')->group(static function() {
        Route::get('/login', [LoginController::class, 'render']);
        Route::post('/login', [LoginController::class, 'login']);
    });
});

// Logged-in routes.
Route::middleware('auth')->group(static function ()
{
    // Home.
    Route::get('/', [HomeController::class, 'render'])->name('home');
});

// Resources.
Route::resource('users', UserController::class);
