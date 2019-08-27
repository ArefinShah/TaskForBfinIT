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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/view-invoice', function () {
//     return view('viewInvoice');
// });

Route::get('/', 'WelcomeController@index');

// Route::get('/home', [
//     'uses'=>'CustomersController@customer'
// ]);

Route::get('/create-customer', 'CustomersController@customer')->name('customer');
Route::get('/create-product', 'ProductsController@product')->name('product');
Route::get('/view-invoice', 'ViewinvoicesController@viewinvoice');
Route::get('/payment', 'PaymentsController@payment');

// Route::post('/insert', 'CustomersController@insert')->name('insert');
Route::post('/insertCustomer', 'CustomersController@insert'); // '/insertCustomer' is form action
Route::post('/insertProduct', 'ProductsController@insert');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
