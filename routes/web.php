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

//Homepage
Route::get('/', function() {
    return view('index');
});

//*****************************LOGINController*****************************
//If person logged in - take them to dashboard.
Route::get('/login', 'LoginController@login_form')->middleware('auth_login');
Route::post('/login', 'LoginController@login')->middleware('auth_login');

//If not logged in take them to '/'
Route::get('/dashboard', 'LoginController@show_dashboard')->middleware('auth_main');

//no need for middleware.
Route::get('/logout', 'LoginController@logout');

//*****************************USERSController*****************************
Route::get('/users', 'UsersController@index');
Route::get('/users/create', 'UsersController@create');
Route::post('/users', 'UsersController@store');
Route::get('/users/{id}', 'UsersController@show');
Route::get('/users/{id}/edit', 'UsersController@edit');
Route::put('/users/{id}', 'UsersController@update');
Route::delete('/users/{id}', 'UsersController@delete');

//****************************scaffolded resources**************************
Route::resource('clients', 'ClientsController');
Route::resource('departments', 'DepartmentsController');
Route::resource('titles', 'TitlesController');
Route::resource('employees', 'EmployeesController');

