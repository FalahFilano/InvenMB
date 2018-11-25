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

Route::get('/', function () {
    return view('dashboard.template');
});

Auth::routes();
Route::get('logout', function() {
	auth()->logout();

	return redirect(route('login'));
})->name('customlogout');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/inven', 'ListInvenController@index')->name('inven.index');
Route::get('/admin', 'AdminController@index')->name('admin.home');
Route::get('/inventaris', 'InventarisController@index')->name('inventaris.index');