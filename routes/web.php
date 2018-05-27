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

Auth::routes();
Route::group(['prefix'=>'admin'],function() {
   Route::get('/','AdminController@index')->name('index');
   Route::post('/proofs/store','AdminController@storeProofs')->name('storeProofs');
   Route::get('/comments','AdminController@showComments')->name('showComments');
   Route::post('/comment/publish/{id}','AdminController@publishComment')->name('publishComment');
   Route::post('/comment/un/publish/{id}','AdminController@UnPublishComment')->name('UnPublishComment');
   Route::get('/show/proofs','AdminController@showProofs')->name('showProofs');
   Route::post('/proofs/publish/{id}','AdminController@publishProofs')->name('publishProofs');
   Route::post('/proofs/un/publish/{id}','AdminController@UnPublishProofs')->name('UnPublishProofs');
   Route::get('/add/bet','AdminController@addBet')->name('addBet');
   Route::post('/store/bet','AdminController@storeBet')->name('storeBet');
   Route::get('/bets','AdminController@bets')->name('bets');
   Route::get('/bet/del/{id}','AdminController@delBet')->name('delBet');
   Route::post('/bet/update/{id}','AdminController@updateBet')->name('updateBet');
});



Route::group(['prefix'=>'/'], function() {
    Route::get('/', 'HomeController@index')->name('home');
    Route::post('/comment','HomeController@commentAdd')->name('commentAdd');
});

