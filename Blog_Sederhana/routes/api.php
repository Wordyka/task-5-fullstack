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

Route::prefix('v1')->group(function () {

    Route::post('register', 'API\UserController@register');
    Route::post('login', 'API\UserController@login');

    // Route::get('/', 'API\ArticleAPIController@index');

    // // CEK TOKEN USER, HARUS LOGIN DULU
    // Route::middleware('client')->group(function () {
    //     // Route::get('/', 'API\ArticleAPIController@index');
    // });

    Route::middleware('auth:api')->group(function () {
        Route::get('profile', 'API\UserController@profile');
        Route::get('logout', 'API\UserController@logout');

        Route::apiResources([
            'categories' => 'API\CategoryAPIController',
            'articles' => 'API\ArticleAPIController',
        ]);
    });

});
