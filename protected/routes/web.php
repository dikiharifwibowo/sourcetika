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

Route::get('/', 'Welcome@index');
Route::get('/home', 'HomeController@index');

Auth::routes();


Route::get('/tech/{tech}', 'PostController@tech');
Route::post('/search', 'PostController@search');

Route::group(['middleware' => 'admin'], function () {
	Route::get('/admin', function(){
			return view ('admin.admin');
		}
	);
});

Route::group(['middleware' => 'login'], function () {
	Route::get('/post', 'PostController@index');
	Route::post('/post', 'PostController@save');
});



// Route::get('social/login/redirect/{provider}', ['uses' => 'Auth\LoginController@redirectToProvider', 'as' => 'social.login']);
// Route::get('social/login/facebook', 'Auth\LoginController@handleProviderCallback');

Route::get('social/login/redirect/{provider}', ['uses' => 'Auth\LoginController@redirectToProvider', 'as' => 'social.login']);
Route::get('social/login/{provider}', 'Auth\LoginController@handleProviderCallback');

Route::get('/{slug}', 'Welcome@read');