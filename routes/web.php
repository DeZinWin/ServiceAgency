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
Route::get('/main', function () {
    return view('layouts.main');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/ui', function () {
    return view('layouts.ui');
});


Route::resource('/regions','RegionController');
Route::resource('/townships','TownshipController');
Route::resource('/service_categories','ServiceCategoryController');
Route::resource('/service_items','ServiceItemController');
Route::resource('/bookings','BookingController');
Route::resource('/shops','ShopController');
