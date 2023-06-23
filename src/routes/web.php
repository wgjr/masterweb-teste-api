<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/required_token', function () {
    return \App\Http\Controllers\Domain\ValueObject\ResponseFormateHateaos::hateosReponse('login', 'login_required', 401, ['message' => 'Unauthorized']);
})->name('loginRequired');

Route::any('/invalid_token/{name?}', function () {
    return \App\Http\Controllers\Domain\ValueObject\ResponseFormateHateaos::hateosReponse('login', 'login_invalid', 401, ['message' => 'invalid token, please login']);
})->name('loginInvalid');

Route::any('/method_not_allowed', function () {
    return \App\Http\Controllers\Domain\ValueObject\ResponseFormateHateaos::hateosReponse('Method', 'Method is not supported for route',
        405, ['message' => 'Method is not supported for route']);
})->name('methodNotAllowed');

Route::fallback( function () {
    abort( 404 );
} );