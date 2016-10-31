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
Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => 'web'], function() {
	    Auth::routes();

		Route::get('/home', 'Admin\HomeController@index');
		Route::get('/login/passlessauth', 'Auth\PassLessAuthController@show');
		Route::post('/login/passlessauth', 'Auth\PassLessAuthController@sendToken');
		Route::get('/login/passlessauth/{token}', 'Auth\PassLessAuthController@validateToken');

		route::get('/admin', 'Admin\HomeController@index');
		route::get('/admin/dashboard', 'Admin\DashboardController@index');
		route::get('/admin/activity', 'Admin\ActivityController@index');
		route::get('/admin/profile', 'Admin\ProfileController@index');

		route::get('/admin/user', 'Admin\UserController@index');
		route::post('/admin/user/', 'Admin\UserController@store');
		route::delete('/admin/user/{user}', 'Admin\UserController@delete');
		route::get('/admin/user/create', 'Admin\UserController@create');
		route::get('/admin/user/{user}', 'Admin\UserController@show');

		route::get('/admin/department', 'Admin\DepartmentController@index');
		route::post('/admin/department/', 'Admin\DepartmentController@store');
		route::get('/admin/department/create', 'Admin\DepartmentController@create');
		route::get('/admin/department/{department}', 'Admin\DepartmentController@show');
		route::get('/admin/department/{department}/edit', 'Admin\DepartmentController@edit');
		route::patch('/admin/department/{department}', 'Admin\DepartmentController@update');

		route::get('/admin/role', 'Admin\RoleController@index');
		route::post('/admin/role', 'Admin\RoleController@store');
		route::get('/admin/role/create', 'Admin\RoleController@create');

		route::get('/admin/client', 'Admin\ClientController@index');
		route::post('/admin/client', 'Admin\ClientController@store');
		route::get('/admin/client/create', 'Admin\ClientController@create');
		route::get('/admin/client/{client}', 'Admin\ClientController@show');
		route::get('/admin/client/{client}/edit', 'Admin\ClientController@edit');
		route::patch('/admin/client/{client}', 'Admin\ClientController@update');

		route::get('/admin/task', 'Admin\TaskController@index');
		route::post('/admin/task/', 'Admin\TaskController@store');
		route::get('/admin/task/create', 'Admin\TaskController@create');
		route::get('/admin/task/{task}', 'Admin\TaskController@show');

		route::post('/admin/comment', 'Admin\CommentController@store');

		route::get('/admin/settings', 'Admin\SettingController@index');
});

