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

Route::get('/', function () {
    return view('welcome');
});


// TODO: register, login & prefixare cu /admin/??
Route::resource('machines', 'MachinesController');
Route::resource('organizations', 'OrganizationsController');
Route::resource('companies', 'CompaniesController');
Route::resource('deposits', 'DepositsController');
Route::resource('operators', 'OperatorsController');
// Route::get('/machines', ['uses' => 'MachinesController@list', 'as' => 'machines.list']);


// Route::get('/machines/create', ['uses' => 'MachinesController@create', 'as' => 'machines.create']);

// Route::get('/machines/store', ['uses' => 'MachinesController@store', 'as' => 'machines.store']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/template', function() {
	return view('template');
});


Route::get('/about', function() {
	return view('about');
});