<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it theoller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::get('/masterpage', 'MasterController@index');
 
Route::get('/contact', 'ContactController@index');

Route::get('/conditions', 'ConditionsController@index');

Route::get('/parc','ParcController@index');

Route::post('/parc/filtre','ParcController@filtre');
Route::post('/parc','ParcController@search');
Route::get('/parc/{id}','ParcController@reserve');
Route::post('/parc/{id}','ParcController@reservestore');



Route::get('/auth/login','Auth\AuthController@getLogin');
Route::post('/auth/login','Auth\AuthController@postLogin');

Route::get('/auth/register','Auth\AuthController@getRegister');
Route::post('/auth/register','Auth\AuthController@postRegister');

Route::get('/auth/logout','Auth\AuthController@getLogout');




Route::get('/dashboard','AdminController@dashboard');

Route::get('/dashboard/clients/autocomplete',['as'=>'admin.dashboard.production.clients.autocomplete','uses'=>'ClientsController@autocomplete']);
Route::get('/dashboard/clients','ClientsController@index');
Route::post('/dashboard/clients','ClientsController@store');
Route::put('/dashboard/clients/{id}','ClientsController@editc');
Route::get('/dashboard/clients/delete/{id}','ClientsController@destroy');
Route::get('/dashboard/clients/create','ClientsController@create');
Route::get('/dashboard/clients/{id}','ClientsController@edit');


Route::get('/dashboard/cars/autocomplete',['as'=>'admin.dashboard.production.cars.autocomplete','uses'=>'CarsController@autocomplete']);
Route::get('/dashboard/cars','CarsController@index');
Route::post('/dashboard/cars','CarsController@store');
Route::post('/dashboard/cars/upload','CarsController@upload');
Route::get('/dashboard/cars/create','CarsController@create');
Route::get('/dashboard/cars/delete/{id}','CarsController@destroy');
Route::get('/dashboard/cars/{id}','CarsController@edit');
Route::put('/dashboard/cars/{id}','CarsController@editc');

Route::get('/dashboard/reservations','ReservationsController@index');
Route::post('/dashboard/reservations','ReservationsController@store');
Route::get('/dashboard/reservations/create','ReservationsController@create');
Route::get('/dashboard/reservations/{id}','ReservationsController@edit');
Route::put('/dashboard/reservations/{id}','ReservationsController@editc');
Route::get('/dashboard/reservations/delete/{id}','ReservationsController@destroy');



Route::post('/dashboard/conducteurs','ConductorsController@store');

Route::get('/dashboard/contrats','ContratsController@index');
Route::get('/dashboard/contrats/preview/{id}','ContratsController@preview');
Route::post('/dashboard/contrats','ContratsController@store');
Route::get('/dashboard/contrats/create','ContratsController@create');
Route::get('/dashboard/contrats/{id}','ContratsController@edit');
Route::put('/dashboard/contrats/{id}','ContratsController@editc');
Route::get('/dashboard/contrats/delete/{id}','ContratsController@destroy');



Route::get('/test','TestController@index');
Route::get('/test/autocomplete',['as'=>'test.autocomplete','uses'=>'TestController@autocomplete']);
Route::post('/test','TestController@store');


