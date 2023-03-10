<?php

use App\Http\Controllers\Stocks\StocksController;
use App\Http\Controllers\User\UserAdmin;
use App\Http\Controllers\User\UserBase;
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

/**
 * API to handle the core logic of the authentication process.
 */
Route::controller(UserBase::class)->prefix('auth')->group(function () {
    Route::post('login', 'login')->name('login');
    Route::post('register', 'register')->name('register');
    Route::post('logout', 'logout')->name('logout');
    Route::post('refresh', 'refresh')->name('refresh');
});

/**
 * API to handle stocks.
 */
Route::controller(UserBase::class)->group(function () {
    Route::get('users/{user_id}/stocks', 'getStocks')
        ->whereNumber('user_id')
        ->name('getUserStocks');

    Route::patch('users/{user_id}/increase', 'increaseWallet')
        ->whereNumber('user_id')
        ->name('patchWallet');
});

Route::controller(StocksController::class)->group(function () {
    Route::delete('users/{user_id}/stocks/{stock_id}', 'sellStocks')
        ->whereNumber('user_id')
        ->whereNumber('stock_id')
        ->name('sellStocks');
});



/**
 * Admin API.
 */
Route::controller(UserAdmin::class)->prefix('admin')->middleware('onlyAdmin')->group(function () {
    Route::get('stocks', 'getStocks')
        ->name('getAdminAllStocks');

    Route::get('users', 'getUsers')
        ->name('getAdminAllUsers');

    Route::patch('users/{user_id}', 'updateApprovedByAdministrator')
        ->whereNumber('user_id')
        ->name('patchApprovedByAdministrator');
});
