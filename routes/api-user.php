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
        Route::post('/login', [AuthenticationController::class, 'login'])->name('Admin.Auth.Login');
        Route::post('/register', [AuthenticationController::class, 'register'])->name('Admin.Auth.Register');
        Route::post('/forgot', [AuthenticationController::class, 'forgot'])->name('Admin.Auth.Forgot');
        Route::post('/reset', [AuthenticationController::class, 'reset'])->name('Admin.Auth.Reset');
    }
);

Route::group(
    ['middleware' => ['UserAuthReq']],
    function () {

        /* USER PROFILE API Routes */

        Route::group(
            ['prefix' => 'user'],
            function () {
                Route::get('/details', [AuthenticationController::class, 'profile_details'])->name('Admin.Profile.Details');
                Route::patch('/update', [AuthenticationController::class, 'profile_update'])->name('Admin.Profile.Update');
                Route::patch('/update/password', [AuthenticationController::class, 'profile_update_password'])->name('Admin.Profile.Update.Password');
                Route::get('/logout', [AuthenticationController::class, 'profile_logout'])->name('Admin.Profile.Logout');
            }
        );

        /* USER BLOGS API Routes */

        Route::apiResource('blogs', BlogController::class );

        /* USER CATEGORIES API Routes */

        Route::apiResource('categories', CategoryController::class );

    }
);
