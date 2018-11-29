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
Route::get('/home/detail', 'HomeController@detail')->name('detail');

Route::get('/inventaris', 'Admin\InventarisController@index')->name('inventaris.index');
Route::get('/inventaris/create', 'Admin\InventarisController@create')->name('inventaris.create');
Route::post('/inventaris/store', 'Admin\InventarisController@store')->name('inventaris.store');
Route::get('/inventaris/{id}/edit', 'Admin\InventarisController@edit')->name('inventaris.edit');
Route::put('/inventaris/{id}/update', 'Admin\InventarisController@update')->name('inventaris.update');
Route::delete('/inventaris/{id}/delete', 'Admin\InventarisController@delete')->name('inventaris.delete');

Route::get('/peminjaman', 'User\PeminjamanController@index')->name('peminjaman.index');
Route::get('/peminjaman/create', 'User\PeminjamanController@create')->name('peminjaman.create');
Route::post('/peminjaman/store', 'User\PeminjamanController@store')->name('peminjaman.store');