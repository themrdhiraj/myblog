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


//Admin routes
Route::get('/dashboard', 'AdminController@index');
Route::get('/profile', 'AdminController@profile');
Route::get('/profileUpdate', 'AdminController@profileUpdate');
Route::get('/aboutme', 'AdminController@aboutme');
Route::get('/aboutmeUpdate', 'AdminController@aboutmeUpdate');
Route::get('/works', 'AdminController@works');
Route::get('/editWorks/{id}', 'AdminController@editWorks');
Route::get('/worksUpdate', 'AdminController@worksUpdate');
Route::get('/addWorks', 'AdminController@addWorks');
Route::get('/updateWorks', 'AdminController@updateWorks');
Route::get('/worksShow', 'AdminController@worksShow');
Route::get('/destroyWorks/{id}', 'AdminController@destroyWorks');

//Posts routes

Route::resource('posts','PostsController');

//Users routes
Route::get('/', 'UserController@index');
Route::get('/about', 'UserController@about');
Route::get('/single/{id}', 'UserController@single');
Route::get('/contact', 'UserController@contact');
Route::get('/work', 'UserController@work');

Auth::routes();

Route::get('/home', 'AdminController@index');
