<?php

use Illuminate\Support\Facades\Route;

/*
|
|-----------------
| Web Routes
|-----------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* User route */
Route::get('/user/', [\App\Http\Controllers\AppController::class, 'user'])->where('any', '.*')->name('lvs.user');
Route::get('/user/{any}', [\App\Http\Controllers\AppController::class, 'user'])->where('any', '.*')->name('lvs.user.any');
Route::get('/', function () { return redirect()->route('lvs.user.any', 'home'); } );

/* Admin route */
Route::get('/admin/auth', [\App\Http\Controllers\AppController::class, 'admin'])->where('any', '.*')->name('lvs.admin.auth');
Route::get('/admin/auth/{any}', [\App\Http\Controllers\AppController::class, 'admin'])->where('any', '.*')->name('lvs.admin.auth.any');
Route::get('/admin/auth', function () { return redirect()->route('lvs.admin.auth.any', 'login'); } );
Route::get('/admin/', [\App\Http\Controllers\AppController::class, 'admin'])->where('any', '.*')->name('lvs.admin');
Route::get('/admin/{any}', [\App\Http\Controllers\AppController::class, 'admin'])->where('any', '.*')->name('lvs.admin.any');
Route::get('/admin', function () { return redirect()->route('lvs.admin.any', 'dashboard'); } );
