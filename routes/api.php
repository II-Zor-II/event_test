<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\IndexController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware(['auth_api'])->group(function () {
    Route::get('/user', [ApiController::class, 'getUser']);
    Route::get('/events', [ApiController::class, 'getEvents']);
    Route::post('/events', [ApiController::class, 'storeEvent']);
});
