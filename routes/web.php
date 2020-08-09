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

// Route::get('/', function () {
//     return view('welcome');
// });


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Creating Controller 
|Insert Data and view that
*/

Route::get('/', 'UserController@index');
Route::get('/add-user', 'UserController@create');
Route::post('/user-add', 'UserController@store');

//For Edit User
Route::get('/user/edit/{id}', 'UserController@edit');
//For Update User and create a function into the UserController.php
Route::post('/user/update/{id}', 'UserController@update');
//For Delete user
Route::get('/user/delete/{id}', 'UserController@delete');