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

Route::middleware(['role:admin'])->group(function () 

{

Route::get('dashboard','BackendController@dashboard')->name('dashboard');

Route::resource('townships','TownshipController');
Route::resource('categories','CategoryController');

});
// 7 (get->4 / post->1 / put->1 / delete->1)


Route::resource('properties','PropertyController');

Route::get('/','FrontendController@home')->name('homepage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
