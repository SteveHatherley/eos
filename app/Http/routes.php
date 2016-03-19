<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
//
	Route::get('/admin/plugins', 'AdminDashboard@plugins');
});
// api
Route::group(['middleware' => ['api']], function () {
    //
});


function adminDashboardHome(){
    return view('admin.home');
}

// Admin Dashboard
Route::group(['middleware' => ['web','auth']], function() {

	Route::get('/admin', 'AdminDashboard@index');

	Route::get('/admin/home', 'AdminDashboard@index');
	Route::get('/admin/dashboard', 'AdminDashboard@index');

	Route::get('/admin/menus', 'AdminDashboard@menus');
	Route::get('/admin/settings', 'AdminDashboard@settings');

	Route::get('/admin/pages', 'AdminDashboard@pages');


	Route::get('/admin/chunks', 'AdminDashboard@chunks');
	Route::get('/admin/templates', 'AdminDashboard@templates');
	Route::get('/admin/layouts', 'AdminDashboard@layouts');
	Route::get('/admin/themes', 'AdminDashboard@themes');
	Route::get('/admin/css', 'AdminDashboard@css');
	Route::get('/admin/typography', 'AdminDashboard@typography');
	Route::get('/admin/glyphs', 'AdminDashboard@glyphs');
	Route::get('/admin/emojii', 'AdminDashboard@emojii');
});


Route::group(['middleware' => 'web'], function () {
    Route::get('/home', 'HomeController@index');
});
