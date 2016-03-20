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

Route::get('/', array('as' => 'home', function() {
    return View::make('home');
}));

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

// Controller Routes
// Route::controllers([
//     'user/auth' => 'Auth\AuthController',
//     'user/password' => 'Auth\PasswordController',
// ]);

// Public Routes
Route::group(['middleware' => ['web']], function () {
//
	
});

// api
Route::group(['middleware' => ['api']], function () {
	Route::get('/admin/login', 'AdminDashboard@showLogin');
});


function adminDashboardHome(){
    return view('admin.home');
}


// Users
Route::resource('/admin/users', 'UserController');

// Roles
Route::resource('/admin/roles', 'RoleController');

// Dashboard
Route::get('dashboard', ['as' => 'dashboard', 'uses' => function() {
    return view('centaur.dashboard');
}]);

// Admin Dashboard
Route::group(['middleware' => ['web']], function() {
	Route::auth();

	Route::get('/admin', 'AdminDashboard@index');
	Route::get('/admin/home', 'AdminDashboard@index');
	Route::get('/admin/dashboard', 'AdminDashboard@index');

	Route::get('/admin/menus', 'AdminDashboard@menus');
	Route::get('/admin/settings', 'AdminDashboard@settings');
	// Route::get('/admin/users', 'AdminDashboard@users');
	Route::get('/admin/groups', 'AdminDashboard@groups');
	Route::get('/admin/permissions', 'AdminDashboard@permissions');
	Route::get('/admin/plugins', 'AdminDashboard@plugins');
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