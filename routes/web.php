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

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/login/passlessauth', 'Auth\PassLessAuthController@show');
Route::post('/login/passlessauth', 'Auth\PassLessAuthController@sendToken');
Route::get('/login/passlessauth/{token}', 'Auth\PassLessAuthController@validateToken');

route::get('/admin/dashboard', 'Admin\DashboardController@index');






route::get('/admin', 'Admin\HomeController@index');

route::get('/admin/dashboard', 'Admin\DashboardController@index');

route::get('/admin/profile', 'Admin\ProfileController@index');

route::get('/admin/user', 'Admin\UserController@index');
route::get('/admin/user/create', 'Admin\UserController@create');


route::get('/admin/department', 'Admin\DepartmentController@index');
route::get('/admin/department/create', 'Admin\DepartmentController@create');

route::get('/admin/role', 'Admin\RoleController@index');
route::get('/admin/role/create', 'Admin\RoleController@create');


route::get('/admin/client', 'Admin\ClientController@index');
route::get('/admin/client/create', 'Admin\ClientController@create');

route::get('/admin/task', 'Admin\TaskController@index');
route::get('/admin/task/create', 'Admin\TaskController@create');

route::get('/admin/settings', 'Admin\SettingController@index');