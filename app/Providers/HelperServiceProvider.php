<?php

namespace App\Providers;

use DB;
use PdfReport;
use ExcelReport;
use Auth;
use Session;
use \App\User;


use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//All helpers inside Helpers folder will be registered
		foreach (glob(app_path() . '/Helpers/*.php') as $filename) {
			require_once( $filename );
		}
	}
}
