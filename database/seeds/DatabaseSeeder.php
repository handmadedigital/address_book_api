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
		$this->call('CompanyDetailSeederTable');
		$this->call('StateTableSeeder');
		$this->call('CompanyCredentialsTableSeeder');
		$this->call('CredentialOptionsTableSeeder');
		$this->call('EmployeeTableSeeder');
		$this->call('OptionCredentialGroupTableSeeder');
		$this->call('CityTableSeeder');
	}

}
