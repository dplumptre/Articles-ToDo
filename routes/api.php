<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});




Route::prefix('welcome')->group(function () {

    Route::get('schools', 'ApiController@schools')->name('schools');
    Route::get('school-create', 'ApiController@schoolCreate')->name('school.create');
    Route::post('school-create', 'ApiController@schoolPost')->name('school.post');
    Route::get('school-edit/{school}', 'ApiController@schoolEdit')->name('school.edit');
    Route::put('school-update/{school}', 'ApiController@schoolUpdate')->name('school.update');
    Route::get('delete-school/{school}', 'ApiController@SchoolDelete')->name('school.delete');




    Route::get('test', 'ApiController@test')->name('test');

    });
