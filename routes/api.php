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

Route::group(['prefix'=>'user'], function(){
    Route::get('', ['uses' => 'Users@getUsers']);
});

Route::group(['prefix'=>'list'], function(){
    Route::get('', ['uses' => 'Lists@getLists']);
    Route::post('', ['uses' => 'Lists@createLists']);
//    Route::delete('', ['uses' => 'Lists@removeLists']);
});

Route::group(['prefix'=>'product'], function(){
    Route::get('{id}', ['uses' => 'Products@getProducts']);
    Route::post('', ['uses' => 'Products@createProducts']);
//    Route::delete('{id}', ['uses' => 'Products@removeProducts']);
});

Route::group(['prefix'=>'task'], function(){
    Route::get('', ['uses' => 'Tasks@getTasks']);
});

Route::group(['prefix'=>'calendar'], function(){
    Route::get('', ['uses' => 'Calendars@getCalendars']);
});

Route::group(['prefix'=>'playlist'], function(){
    Route::get('{id}', ['uses' => 'Playlists@getPlaylist']);
});

Route::group(['prefix'=>'mirror'], function(){
    Route::get('{id}', ['uses' => 'Mirrors@getMirror']);
});