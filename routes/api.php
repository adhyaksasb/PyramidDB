<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('App\Http\Controllers\API')->group(function () {

    // Auth
    Route::post('user/register', 'AuthController@register');
    Route::post('user/login', 'AuthController@login');

    Route::get('characters', 'CharacterController@index');

    Route::group(['middleware' => ['auth:sanctum']], function () {
        Route::post('logout-user', 'APIController@logoutUser');
        Route::get('products', 'ProductController@index');
    });
});
