<?php namespace ThreeAccents\Companies\Handlers;

use ThreeAccents\Commands\AddCompanyCommand;

use Illuminate\Queue\InteractsWithQueue;
use ThreeAccents\Companies\Entities\Company;
use ThreeAccents\Companies\Repositories\CompanyRepository;
use ThreeAccents\Events\CompanyWasAdded;

class AddCompanyCommandHandler
{
	protected $companyRepo;

	/**
	 * Create the command handler.
	 *
	 */
	public function __construct(CompanyRepository $companyRepo)
	{
		$this->companyRepo = $companyRepo;
	}

	/**
	 * Handle the command.
	 *
	 * @param  AddCompanyCommand  $command
	 * @return void
	 */
	public function handle(AddCompanyCommand $command)
	{
		$company = Company::add($command->getName(), $command->getAddress(), $command->getCity(), $command->getState(), $command->getCountry(), $command->getZipCode(), $command->getPhoneNumber(), $command->getEmail());

		$this->companyRepo->persist($company);

		event(new CompanyWasAdded($company));
	}

}
