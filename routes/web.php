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

Route::get('/', 'welcomeamerica@index');

Route::get('/developer/{developer}/delete', 'enteramerica@fakedelete');

Route::resource('/developer', 'enteramerica');

//--------------------------------------------------------------------------


Route::get('/developer/{america}/place/create', 'crudplace@create');

Route::post('/developer/{america}/place', 'crudplace@store');

Route::delete('/developer/{place}/place/delete', 'crudplace@destroy');

