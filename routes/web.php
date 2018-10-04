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

Route::resource("countries", "CountriesController");
Route::get("/", "CountriesController@index");
// Route::get("/create", "CountriesController@create");
// Route::post("/", "CountriesController@store");
// Route::get("/{id}", "CountriesController@show");
// Route::get("/{id}/edit", "CountriesController@edit");
// Route::put("/{id}/edit", "CountriesController@update");
// Route::delete('/{id}', 'CountriesController@destroy');


Route::resource("companies", "CompaniesController");
Route::resource("users", "UsersController");
Route::resource("company__users", "Company_UserController");

Route::get("/companies/{id}/admin", "CompaniesController@admin");
Route::get("/users/{id}/edit", "UsersController@edit");
Route::delete('/companies/{id}/admin', 'Company_UserController@destroy');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
