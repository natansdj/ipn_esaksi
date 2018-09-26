<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Pagination\Paginator;
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
		Paginator::defaultView('pagination::bootstrap-4');
		Paginator::defaultSimpleView('pagination::simple-bootstrap-4');

		Relation::morphMap([
			'pileg'   => 'App\Models\Pileg',
			'pilpres' => 'App\Models\Pilpres',
		]);
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
