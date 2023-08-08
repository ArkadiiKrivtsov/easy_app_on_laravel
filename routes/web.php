<?php

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

Route::middleware('guest')->group(function () {
    Route::get('/', [\App\Http\Controllers\LoginController::class, 'loadPage'])->name('loginPage');
    Route::post('/', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
});

Route::middleware('auth')->group(function () {
    Route::get('/exit', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

    Route::get('/users', [\App\Http\Controllers\UsersController::class, 'loadUsersPage'])->name('users');
    Route::get('/users/create', [\App\Http\Controllers\UsersController::class, 'loadCreateUserPage'])->name('user.create');
    Route::post('/users/create', [\App\Http\Controllers\UsersController::class, 'createUser'])->name('create');

    Route::delete('/delete/{id}', [\App\Http\Controllers\UsersController::class, 'destroy'])->name('user.destroy')->whereNumber('id');

    Route::get('/goods', [\App\Http\Controllers\GoodsController::class, 'loadPage'])->name('goods');

    Route::get('/settings', [\App\Http\Controllers\SettingsController::class, 'loadPage'])->name('settings');
    Route::put('/settings', [\App\Http\Controllers\SettingsController::class, 'update'])->name('settings.update');
});


