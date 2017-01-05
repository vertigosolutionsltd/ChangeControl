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

Auth::routes();
//Home page View
Route::get('/', function () {
    return view('welcome');
});

Route::resource('forms', 'Form2Controller');


// View all forms
// Route::get('/forms', 'FormController@index');
// // Add a new Change Control -- Form
// Route::get('/forms/add', 'FormController@add');
// Route::post('/forms/add', 'FormController@insert');

// //Route::get('/forms/{form}', 'FormController@details');
// Route::get('/forms/{form}/edit', 'FormController@edit');
// Route::patch('/forms/{form}/update', 'FormController@update');




// View all customers
Route::get('/customers', 'CustomerController@index');
// Show the add customer form
Route::get('/customers/add/', 'CustomerController@add');
Route::post('/customers/add/', 'CustomerController@insert');
// View a single Customer
Route::get('/customers/{customer}', 'CustomerController@details');

