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

Route::get('/', 'ArticleController@indexHome');

Route::get('/category', 'CategoryController@index');

Route::get('/article', 'ArticleController@index');

Route::get('/article/{user_id}', 'ArticleController@indexUser');

Route::get('/article-category/{category_id}', 'ArticleController@indexCategory');



//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', function() {
    return view('auth.login');
});
