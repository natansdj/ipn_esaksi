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

Route::get('/welcome', function () {
	return view('welcome');
})->name('welcome');

/**
 * Disable several Auth routes
 */
Auth::routes();

Route::group([
	//
], function () {
	Route::any('register', function () {
		return redirect('/');
	});
	Route::group(['prefix' => 'password'], function () {
		Route::any('reset', function () {
			return redirect('/');
		});
		Route::any('email', function () {
			return redirect('/');
		});
		Route::get('reset/{token}', function () {
			return redirect('/');
		});
	});
});