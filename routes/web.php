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

Route::get('/', 'HomeController@index');

Route::get('/home', function () {
    return redirect('/');
});

Auth::routes();


Route::group(['middleware' => ['auth']], function () {
   
	Route::get('/template', function() {
		return view('template');
	});


	// TODO: register, login & prefixare cu /admin/??
	Route::resource('machines', 'MachinesController');
	Route::resource('organizations', 'OrganizationsController');
	Route::resource('companies', 'CompaniesController');
	Route::resource('deposits', 'DepositsController');
	Route::resource('operators', 'OperatorsController');

	Route::resource('machine-parameters', 'MachineParametersController');
	Route::resource('machine-categories', 'MachineCategoriesController');
	Route::resource('messages', 'MessagesController');

	Route::resource('contacts', 'ContactsController');
	Route::resource('newsletters', 'NewsLettersController');

	// Route::get('/machines', ['uses' => 'MachinesController@list', 'as' => 'machines.list']);


	// Route::get('/machines/create', ['uses' => 'MachinesController@create', 'as' => 'machines.create']);

	// Route::get('/machines/store', ['uses' => 'MachinesController@store', 'as' => 'machines.store']);

	 //


	Route::get('/machines-map', 'MachinesController@map');

	Route::get('/about', function() {
		return view('about');
	});
});


Route::get("/add-machines", "AddDataController@addMachines");
Route::get("/messages", "MessagesController@index");

Route::post("/message-change-status/{messageId}", "MessagesController@changeReadStatus");


Route::post('/contacts', 'ContactsController@store')->name('contacts.store');
Route::post('/newsletter', 'NewsLettersController@store')->name('newsletters.store');
