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
Route::get('/', function() {
    return view('index');
});

Route::get('/logout', 'LoginController@logout');

Route::get('/login', function() {
    return view('login');
});

Route::post('/', 'LoginController@login');

//loads the dashboard home
Route::get('/dashboard', 'LoginController@show_dashboard');

//*****************************USERSController*****************************

//index route
Route::get('/users', 'UsersController@index');

//new route
Route::get('/users/create', 'UsersController@create');

//create route
Route::post('/users', 'UsersController@store');

//show route - this route grabs users/new so it needs to be below
//the more specificaly written routes.
Route::get('/users/{id}', 'UsersController@show');

//edit route
Route::get('/users/{id}/edit', 'UsersController@edit');

//update route (put/patch)
Route::put('/users/{id}', 'UsersController@update');

//delete route
Route::delete('/users/{id}', 'UsersController@delete');

//****************************scaffolded resources**************************
Route::resource('clients', 'ClientsController');
Route::resource('departments', 'DepartmentsController');
Route::resource('titles', 'TitlesController');
Route::resource('employees', 'EmployeesController');

