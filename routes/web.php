<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Auth;
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

// Add routes that are accessible without authentication here
Route::middleware(['guest'])->group(function(){
    // redirect root to login
    Route::redirect('/', '/login');

    Route::get('/login', [IndexController::class, 'showLogin'])->name('login');
    Route::post('/login', [IndexController::class, 'doLogin']);
});

// Add routes that need authentication here
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [IndexController::class, 'showDashboard'])->name('dashboard');
});

