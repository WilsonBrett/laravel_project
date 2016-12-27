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
//
//*****************************LOGINController*****************************

Route::get('/', 'LoginController@logout');

Route::get('/login', 'LoginController@show_login');

Route::post('/', 'LoginController@login');

//loads the landing page
Route::get('/home', 'LoginController@show_home');

//*****************************USERSController*****************************

//index route
Route::get('/users', 'UsersController@getAll');

//new route
Route::get('/users/new', 'UsersController@newUserForm');

//create route
Route::post('/users/create', 'UsersController@addUser');

//show route - this route grabs users/new so it needs to be below
//the more specificaly written routes.
Route::get('/users/{id}', 'UsersController@showUser');

//edit route
Route::get('/users/{id}/edit', 'UsersController@editUser');

//update route (put/patch)
Route::put('/users/{id}', 'UsersController@updateUser');

//delete route
Route::delete('/users/{id}', 'UsersController@deleteUser');

//****************************scaffolded resources**************************
Route::resource('clients', 'ClientsController');
Route::resource('departments', 'DepartmentsController');
Route::resource('titles', 'TitlesController');
Route::resource('employees', 'EmployeesController');

