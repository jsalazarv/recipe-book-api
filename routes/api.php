<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SocialNetworkController;
use App\Http\Controllers\UserController;
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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::group(['prefix' => 'users'], function () {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/', [UserController::class, 'store']);
    Route::get('/{id}', [UserController::class, 'show']);
    Route::put('/{id}', [UserController::class, 'update']);
    Route::delete('/{id}', [UserController::class, 'destroy']);
});

Route::group(['prefix' => 'profiles'], function () {
    Route::get('/', [ProfileController::class, 'index']);
    Route::get('/{id}', [ProfileController::class, 'show']);
    Route::put('/{id}', [ProfileController::class, 'update']);
});

Route::group(['prefix' => 'social-networks'], function () {
    Route::get('/', [SocialNetworkController::class, 'index']);
    Route::get('/{id}', [SocialNetworkController::class, 'show']);
    Route::put('/{id}', [SocialNetworkController::class, 'update']);
});
