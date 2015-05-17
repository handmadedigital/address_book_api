<?php namespace ThreeAccents\Handlers\Commands;

use ThreeAccents\Commands\AddEmployeeCommand;

use Illuminate\Queue\InteractsWithQueue;
use ThreeAccents\Companies\Entities\Employee;

class AddEmployeeCommandHandler {

	/**
	 * Create the command handler.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}

	/**
	 * Handle the command.
	 *
	 * @param  AddEmployeeCommand  $command
	 * @return void
	 */
	public function handle(AddEmployeeCommand $command)
	{
		Employee::create([
			'company_id' => $command->getCompanyId(),
			'first_name' => $command->getFirstName(),
			'last_name' => $command->getLastName(),
			'email' => $command->getEmail(),
			'phone' => $command->getPhone()
		]);
	}

}
