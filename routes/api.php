<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Router;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('open', 'DataController@open');

Route::group([
	'prefix' => 'auth'
], function () {
	Route::post('login', 'AuthController@login');
	Route::post('logout', 'AuthController@logout');
	Route::post('refresh', 'AuthController@refresh');
	Route::post('me', 'AuthController@me');
});

Route::group([
	'middleware' => ['jwt.verify']
], function () {
	Route::get('closed', 'DataController@closed');

	Route::resource('pilpres', 'PilpresAPIController');

	Route::resource('pilegs', 'PilegAPIController');

	Route::resource('users', 'UserAPIController');

	Route::resource('tps', 'TpsAPIController');

	Route::resource('votes', 'VoteAPIController');

	Route::resource('dapils', 'DapilAPIController');
});
