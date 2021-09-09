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


Route::prefix('products')->group(function () {

    Route::get('/','App\Http\Controllers\ProductController@showProducts')->name('getProducts');
});

Route::prefix('brands')->group(function () {

    Route::get('/view','App\Http\Controllers\BrandController@index')->name('brands.view');
    Route::get('/add','App\Http\Controllers\BrandController@add')->name('brands.add');
    Route::get('/edit/{id}','App\Http\Controllers\BrandController@edit')->name('brands.edit');
    Route::post('/store','App\Http\Controllers\BrandController@store')->name('brands.store');
    Route::post('/update/{id}','App\Http\Controllers\BrandController@update')->name('brands.update');
    Route::get('/delete/{id}','App\Http\Controllers\BrandController@delete')->name('brands.delete');

});
