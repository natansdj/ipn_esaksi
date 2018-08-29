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

Route::group([
	'middleware' => ['web']
], function () {
	Route::get('/', 'DashboardController@index')->name('dashboard');
	Route::get('/saksi', 'SaksiController@index')->name('saksi.edit');
	Route::get('/tps_search', 'TpsController@search')->name('tps.search');
	Route::get('/pilegs_list', 'PilegController@list')->name('pilegs.list');
	Route::get('/pilpres_list', 'PilpresController@list')->name('pilpres.list');
});

#ajax request
Route::group([
	'prefix'     => 'ajax_data',
	'middleware' => ['ajax_only']
], function () {
	#filter table
	Route::get('{type}/', 'AjaxController@ajax_method');
});

Route::resource('pilpres', 'PilpresController');

Route::resource('pilegs', 'PilegController');

Route::resource('users', 'UserController');

Route::resource('tps', 'TpsController');

Route::resource('votes', 'VoteController');