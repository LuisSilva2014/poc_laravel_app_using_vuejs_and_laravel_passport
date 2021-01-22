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


Route::get('/', 'AuthController@welcome')->name('welcome');
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();


//The key to keep vue js as a SPA you need to always return the same vue
Route::get('/{slug}', 'AuthController@anyRoute')->name('anyr');
