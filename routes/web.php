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

Route::get('waiting','BackendController@waiting')->name('waiting');
Route::get('confirm','BackendController@confirm')->name('confirm');


// For update stataus->approve
Route::resource('approves','WaitingController');


// Route::post('approveupdate/{id}','BackendController@approveupdate')->name('approveupdate');

// simple controller---- view waiting list in backgroundcontroller 
Route::get('waitingdetail/{id}','BackendController@waitingdetail')->name('waitingdetail');
Route::get('confirmdetail/{id}','BackendController@confirmdetail')->name('confirmdetail');



Route::resource('adminrentals','AdminRentalController');


Route::resource('townships','TownshipController');
Route::resource('categories','CategoryController');

});


// 7 (get->4 / post->1 / put->1 / delete->1)
// Owner Waiting
Route::get('profile','FrontendController@profile')->name('profile');
Route::get('about','FrontendController@about')->name('about');
Route::get('contact','FrontendController@contact')->name('contact');

Route::get('filterproperty','FrontendController@property')->name('propertypage');


Route::resource('properties','PropertyController');
Route::resource('ownerwaitings','OwnerWaitingController');
Route::resource('rentallists','RentalListController');

Route::post('/getitems','FrontendController@getItems')->name('getitems');

Route::post('/search','FrontendController@search')->name('search');

Route::resource('rentals','RentalController');

Route::get('/','FrontendController@home')->name('homepage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
