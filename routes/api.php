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

Route::post('login', 'Api\AuthController@login');
Route::get('open', 'Api\DataController@open');

Route::group([
	'middleware' => ['api', 'jwt.verify'],
], function () {
	Route::group([
		'prefix' => 'auth'
	], function () {
		Route::post('logout', 'Api\AuthController@logout');
		Route::post('refresh', 'Api\AuthController@refresh');
		Route::post('me', 'Api\AuthController@me');
	});

	Route::get('closed', 'Api\DataController@closed');
});