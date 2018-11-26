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

Route::get('/', 'HomeController@index');

Auth::routes();
Route::get('logout', function() {
	auth()->logout();

	return redirect(route('login'));
})->name('customlogout');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/inventaris', 'InventarisController@index')->name('inventaris.index');
Route::get('/inventaris/create', 'InventarisController@create')->name('inventaris.create');
Route::post('/inventaris/store', 'InventarisController@store')->name('inventaris.store');
Route::get('/inventaris/{id}/edit', 'InventarisController@edit')->name('inventaris.edit');
Route::put('/inventaris/{id}/update', 'InventarisController@update')->name('inventaris.update');
Route::delete('/inventaris/{id}/delete', 'InventarisController@delete')->name('inventaris.delete');