<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');






Route::get('/', 'WelcomeController@getArticles')->name('welcome.articles');
Route::get('article/{title_slug}', 'WelcomeController@getSingleArticles')->name('single.articles');


Route::prefix('admin-area')->group(function () {

    Route::get('articles', 'HomeController@articles')->name('articles');
    Route::get('article-create', 'HomeController@articleCreate')->name('article.create');
    Route::post('article-create', 'HomeController@articlePost')->name('article.post');
    Route::get('article-edit/{article}', 'HomeController@articleEdit')->name('article.edit');
    Route::put('article-update/{article}', 'HomeController@articleUpdate')->name('article.update');
    Route::get('delete-article/{article}', 'HomeController@articleDelete')->name('article.delete');
    });
