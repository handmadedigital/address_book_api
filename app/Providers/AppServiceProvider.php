<?php namespace ThreeAccents\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		if ($this->app->environment() == 'local') {
			$this->app->register('Laracasts\Generators\GeneratorsServiceProvider');
		}
	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
