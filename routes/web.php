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
Route::resource("companies", "CompaniesController");
Route::resource("users", "UsersController");
Route::get("/companies/{id}/admin", "CompaniesController@admin");
Route::get("/users/{id}/edit", "UsersController@edit");
//Route::post("/companies/{id}", "CompaniesController@store");
//Route::get("/companies/{id}", "CompaniesController@show");


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
