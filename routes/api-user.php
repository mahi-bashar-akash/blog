<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController\AuthenticationController;
use App\Http\Controllers\UserController\BlogController;
use App\Http\Controllers\UserController\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(
    ['middleware' => ['UserAuth'], 'prefix' => 'admin-auth'],
    function () {
        Route::post('/login', [AuthenticationController::class, 'login'])->name('Admin.Auth.Login');
        Route::post('/register', [AuthenticationController::class, 'register'])->name('Admin.Auth.Register');
        Route::post('/forgot', [AuthenticationController::class, 'forgot'])->name('Admin.Auth.Forgot');
        Route::post('/reset', [AuthenticationController::class, 'reset'])->name('Admin.Auth.Reset');
    }
);

Route::group(
    ['middleware' => ['UserAuthReq']],
    function () {
        Route::apiResource('profile', AuthenticationController::class );
        Route::apiResource('blogs', BlogController::class );
        Route::apiResource('categories', CategoryController::class );
    }
);
