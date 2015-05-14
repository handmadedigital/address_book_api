<?php

use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends AbstractSeeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('CompaniesTableSeeder');
	}

}
