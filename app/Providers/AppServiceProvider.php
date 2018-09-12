<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		Schema::defaultStringLength(191);
		setlocale(LC_TIME, config('app.locale'));
		\Carbon\Carbon::setLocale(config('app.locale'));
	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton(\Faker\Generator::class, function () {
			return \Faker\Factory::create('id_ID');
		});
	}
}
