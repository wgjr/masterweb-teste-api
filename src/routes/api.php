<?php

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


Route::post('v1/login', [\App\Http\Controllers\Domain\UseCase\Authenticate\AuthenticateLogin::class, 'login'])->name('login');

Route::middleware('auth:sanctum')->prefix('v1/')->group(function () {
    Route::prefix('auth')->group(function () {
        Route::get('/me', [\App\Http\Controllers\Domain\UseCase\Authenticate\AuthenticateMe::class, 'me'])->name('auth.me');
    });

    Route::prefix('cart')->group(function () {
        Route::post('/close', [\App\Http\Controllers\Domain\UseCase\Sales\CreateSales::class, 'create'])->name('sales.create');
    });

    Route::prefix('products')->group(function () {
        Route::get('', [\App\Http\Controllers\Domain\UseCase\Products\ListProducts::class, 'list'])->name('products.list');
    });
});
