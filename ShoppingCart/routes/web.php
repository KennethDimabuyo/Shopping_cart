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

Route::get('/', [
	'uses' => 'ShopController@index',
	'as' => 'shop.index'
]);
Route::get('/cart', [
	'uses' => 'ShopController@getCart',
	'as' => 'shop.cart'
]);
Route::group(['prefix' => 'user'], function(){
	Route::group(['middleware' => 'guest'], function(){
		Route::get('/signup', [
			'uses' => 'UserController@getSignup',
			'as' => 'users.signup'
		]);

		Route::post('/signup', [
			'uses'=>'UserController@postSignup',
			'as'=>'users.signup'
		]);

		Route::get('/signin', [
			'uses'=>'UserController@getSignin',
			'as'=>'users.signin'
		]);

		Route::post('/signin', [
			'uses'=>'UserController@postSignin',
			'as'=>'users.signin'
		]);
	});
	
	Route::group(['middleware' => 'auth'], function() {
		Route::get('/logout', [
			'uses' => 'UserController@getLogout',
			'as' => 'users.logout'
		]);
	});
});

Route::get('/addtocart/{id}', [
	'uses' => 'ShopController@addToCart',
	'as' => 'addToCart'
]);