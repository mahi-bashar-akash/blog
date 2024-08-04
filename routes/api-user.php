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

/* USER AUTHENTICATION API Routes */

Route::group(
    ['middleware' => ['UserAuth'], 'prefix' => 'user'],
    function () {
        Route::post('/auth/login', [AuthenticationController::class, 'login'])->name('User.Auth.Login');
        Route::post('/auth/register', [AuthenticationController::class, 'register'])->name('User.Auth.Register');
        Route::post('/auth/forgot', [AuthenticationController::class, 'forgot'])->name('User.Auth.Forgot');
        Route::post('/auth/reset', [AuthenticationController::class, 'reset'])->name('User.Auth.Reset');
    }
);

Route::group(
    ['middleware' => ['UserAuthReq']],
    function () {

        /* USER PROFILE API Routes */

        Route::group(
            ['prefix' => 'user'],
            function () {
                Route::get('/details', [AuthenticationController::class, 'profile_details'])->name('User.Profile.Details');
                Route::patch('/update', [AuthenticationController::class, 'profile_update'])->name('User.Profile.Update');
                Route::patch('/update/password', [AuthenticationController::class, 'profile_update_password'])->name('User.Profile.Update.Password');
                Route::get('/logout', [AuthenticationController::class, 'profile_logout'])->name('User.Profile.Logout');
            }
        );

        /* USER BLOGS API Routes */

        Route::apiResource('blogs', BlogController::class );

        /* USER CATEGORIES API Routes */

        Route::apiResource('categories', CategoryController::class );

    }
);
