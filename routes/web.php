<?php

use Illuminate\Support\Facades\Route;

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

Route::get("/pets", "PetController@index");
Route::get("/owners", "OwnerController@index");
Route::get("/home", "HomeController@index");
Route::get("/owners/{owner_id}", "PetController@find_owners_pets");
Route::put("/owners", "PetController@store")->name('doggystyle');
Route::get("/search", 'OwnerController@show_search_form');
Route::post("/result", "OwnerController@search_owner");
Route::get("/create/pet/{id}", 'PetController@create');
Route::get("/create", 'OwnerController@create');
Route::post("/create", 'OwnerController@store');
Route::get("/create/{id}/edit", 'OwnerController@edit');
Route::put("/create/{id}", 'OwnerController@update');



