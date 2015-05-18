<?php namespace ThreeAccents\Handlers\Commands;

use ThreeAccents\Commands\AddEmployeeCommand;

use Illuminate\Queue\InteractsWithQueue;
use ThreeAccents\Companies\Entities\Employee;
use ThreeAccents\Companies\Repositories\EmployeeRepository;

class AddEmployeeCommandHandler
{

	protected $employeeRepo;

	function __construct(EmployeeRepository $employeeRepo)
	{
		$this->employeeRepo = $employeeRepo;
	}

	/**
	 * Handle the command.
	 *
	 * @param  AddEmployeeCommand  $command
	 * @return void
	 */
	public function handle(AddEmployeeCommand $command)
	{
		$employee = Employee::add($command->getCompanyId(), $command->getFirstName(), $command->getLastName(), $command->getEmail(), $command->getPhone());

		$this->employeeRepo->add($employee);
	}

}
