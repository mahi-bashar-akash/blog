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
    ['middleware' => ['userAuth'], 'prefix' => 'auth'],
    function () {
        Route::post('/login', [AuthenticationController::class, 'user_login'])->name('User.Auth.Login');
        Route::post('/register', [AuthenticationController::class, 'user_register'])->name('User.Auth.Register');
        Route::post('/forgot', [AuthenticationController::class, 'user_forgot'])->name('User.Auth.Forgot');
        Route::post('/reset', [AuthenticationController::class, 'user_reset'])->name('User.Auth.Reset');
    }
);

Route::group(
    ['middleware' => ['userAuthReq']],
    function () {

        /* USER PROFILE API Routes */
        Route::group(
            ['prefix' => 'profile'],
            function () {
                Route::get('/details', [AuthenticationController::class, 'user_profile_details'])->name('User.Profile.Details');
                Route::patch('/update', [AuthenticationController::class, 'user_profile_update'])->name('User.Profile.Update');
                Route::patch('/update/password', [AuthenticationController::class, 'user_profile_update_password'])->name('User.Profile.Update.Password');
                Route::get('/logout', [AuthenticationController::class, 'user_profile_logout'])->name('User.Profile.Logout');
            }
        );

        /* USER BLOGS API Routes */
        Route::apiResource('blogs', BlogController::class);

        /* USER CATEGORIES API Routes */
        Route::apiResource('categories', CategoryController::class);
    }
);
