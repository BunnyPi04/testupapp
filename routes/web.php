<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'FrontendController@getHome');
Route::get('detail/{id}/{slug}.html', 'FrontendController@getDetail');

Route::group(['namespace' => 'Admin'], function() {
	Route::group(['prefix' => 'login', 'middleware' => 'CheckLoggedIn'], function() {
		Route::get('/', 'LoginController@getLogin');
		Route::post('/', 'LoginController@postLogin');
	});
	Route::get('logout', 'HomeController@getLogout');
	Route::group(['prefix' => 'admin', 'middleware' => 'CheckLoggedOut'], function() {
		Route::get('home', 'HomeController@getHome');

		Route::group(['prefix' => 'category'], function() {
			Route::get('/', 'CategoryController@getCate');
			Route::post('/', 'CategoryController@postCate');

			Route::get('edit/{id}', 'CategoryController@getEditCate');
			Route::post('edit/{id}', 'CategoryController@postEditCate');
			
			Route::get('delete/{id}', 'CategoryController@deleteCate');
		});

		Route::group(['prefix' => 'product'], function() {
			Route::get('/', 'ProductController@getProduct');

			Route::get('add', 'ProductController@getAddProduct');
			Route::post('add', 'ProductController@postAddProduct');

			Route::get('edit/{id}', 'ProductController@getEditProduct');
			Route::post('edit/{id}', 'ProductController@postEditProduct');

			Route::get('delete/{id}', 'ProductController@deleteProduct');
		});
	});
});
