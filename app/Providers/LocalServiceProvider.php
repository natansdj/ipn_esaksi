<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class LocalServiceProvider extends ServiceProvider
{

	protected $providers = [
		'Barryvdh\Debugbar\ServiceProvider',
		'Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider',
		'Conner\Kint\KintServiceProvider',
		'Way\Generators\GeneratorsServiceProvider',
		'Xethron\MigrationsGenerator\MigrationsGeneratorServiceProvider',
		'Laracasts\Generators\GeneratorsServiceProvider'
	];

	protected $aliases = [
		'Debugbar' => 'Barryvdh\Debugbar\Facade'
	];

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//register the service providers for local environment
		if ($this->app->environment() == 'local' && ! empty($this->providers)) {
			foreach ($this->providers as $provider) {
				if (class_exists($provider)) {
					$this->app->register($provider);
				}
			}
			//register the alias
			if ( ! empty($this->aliases)) {
				foreach ($this->aliases as $alias => $facade) {
					if (class_exists($facade)) {
						$this->app->alias($alias, $facade);
					}
				}
			}
		}

	}
}