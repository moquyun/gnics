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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 't',  'namespace' => 'Test'], function () {
	
	Route::get('a', [ 'as' => 'test.a', 'uses' => 'IndexController@hk_key']);
	/*测试END*/
	//Route::get('pub/login', [ 'as' => 'wxbot.login', 'uses' => 'PubController@Login']);
	//Route::post('pub/login', [ 'as' => 'wxbot.login', 'uses' => 'PubController@Login']);
	//Route::get('pub/moonshare', [ 'as' => 'wxbot.moonshare', 'uses' => 'PubController@Moon_shareinfo']);
	//Route::post('pub/moonshare', [ 'as' => 'wxbot.moonshare', 'uses' => 'PubController@Moon_shareinfo']);
	//Route::post('login', [ 'as' => 'admin.auth.login', 'uses' => 'AuthController@postLogin']);
	//Route::post('logout', [ 'as' => 'admin.auth.logout', 'uses' => 'AuthController@postLogout']);

	
});