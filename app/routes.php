<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/',function(){
	return Redirect::route('main.index');
	//return Redirect::route('dashboard');
});



Route::group(['before' => 'guest'], function(){


	Route::get('home', ['as'=>'main.index','uses' => 'HomeController@home']);

	Route::controller('password', 'RemindersController');
	Route::get('login', ['as'=>'login','uses' => 'AuthController@login']);
	Route::post('login', array('uses' => 'AuthController@doLogin'));
	Route::get('register',['as'=>'user.create','uses'=>'UserController@create']);
	Route::post('register',['as'=>'user.store','uses'=>'UserController@store']);


});


Route::group(array('before' => 'auth'), function()
{
	Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);
	Route::get('dashboard', array('as' => 'dashboard', 'uses' => 'AuthController@dashboard'));
	Route::get('change-password', array('as' => 'password.change', 'uses' => 'AuthController@changePassword'));
	Route::post('change-password', array('as' => 'password.doChange', 'uses' => 'AuthController@doChangePassword'));

	Route::get('profile', ['as'=>'user.show', 'uses'=>'UserController@show']);
	Route::get('edit-profile',['as'=>'user.edit', 'uses'=>'UserController@edit']);
	Route::post('update-profile',['as'=>'user.update', 'uses'=>'UserController@update']);
	Route::get('upload-avatar',['as'=>'upload.avatar', 'uses'=>'UserController@uploadAvatarForm']);
	Route::post('upload-avatar',['as'=>'upload.avatar', 'uses'=>'UserController@uploadAvatar']);



	Route::get('categories', ['as' => 'categories.index', 'uses' => 'CategoriesController@index']);
	Route::get('categories/create', [ 'as'=>'categories.create','uses' => 'CategoriesController@create']);
	Route::post('categories', ['as' => 'categories.store', 'uses' => 'CategoriesController@store']);
	Route::get('categories/{id}', ['as' => 'categories.show', 'uses' => 'CategoriesController@show']);
	Route::get('categories/{id}/edit',['as'=>'categories.edit', 'uses' => 'CategoriesController@edit']);
	Route::put('categories/{id}',['as' => 'categories.update', 'uses' => 'CategoriesController@update']);
	Route::get('categories/{id}/delete', ['as' => 'categories.destroy', 'uses' => 'CategoriesController@destroy']);



	Route::get('products', ['as' => 'products.index', 'uses' => 'ProductsController@index']);
	Route::get('products/create', [ 'as'=>'products.create','uses' => 'ProductsController@create']);
	Route::post('products', ['as' => 'products.store', 'uses' => 'ProductsController@store']);
	Route::get('products/{id}', ['as' => 'products.show', 'uses' => 'ProductsController@show']);
	Route::get('products/{id}/edit',['as'=>'products.edit', 'uses' => 'ProductsController@edit']);
	Route::put('products/{id}',['as' => 'products.update', 'uses' => 'ProductsController@update']);
	Route::get('products/{id}/delete', ['as' => 'products.destroy', 'uses' => 'ProductsController@destroy']);


	Route::get('crops', ['as' => 'crops.index', 'uses' => 'CropsController@index']);
	Route::get('crops/create', [ 'as'=>'crops.create','uses' => 'CropsController@create']);
	Route::post('crops', ['as' => 'crops.store', 'uses' => 'CropsController@store']);
	Route::get('crops/{id}', ['as' => 'crops.show', 'uses' => 'CropsController@show']);
	Route::get('crops/{id}/edit',['as'=>'crops.edit', 'uses' => 'CropsController@edit']);
	Route::put('crops/{id}',['as' => 'crops.update', 'uses' => 'CropsController@update']);
	Route::get('crops/{id}/delete', ['as' => 'crops.destroy', 'uses' => 'CropsController@destroy']);


	Route::get('heatmap/{crop_id}',['as'=>'heatmap','uses'=>'MapController@showHeatmap']);
	Route::get('map/{location}',['as'=>'location','uses'=>'MapController@latlong']);

});



