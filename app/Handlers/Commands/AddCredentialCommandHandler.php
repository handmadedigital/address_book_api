<?php namespace ThreeAccents\Handlers\Commands;

use ThreeAccents\Commands\AddCredentialCommand;

use Illuminate\Queue\InteractsWithQueue;
use ThreeAccents\Companies\Entities\Credential;
use ThreeAccents\Companies\Repositories\CredentialRepository;

class AddCredentialCommandHandler
{
	/**
	 * @var CredentialRepository
	 */
	protected $credentialRepo;

	/**
	 * @param CredentialRepository $credentialRepo
     */
	function __construct(CredentialRepository $credentialRepo)
	{
		$this->credentialRepo = $credentialRepo;
	}

	/**
	 * Handle the command.
	 *
	 * @param  AddCredentialCommand  $command
	 * @return void
	 */
	public function handle(AddCredentialCommand $command)
	{
		$credential = Credential::add($command->getCompanyId(), $command->getGroup(), $command->getOption(), $command->getCredential());

		$this->credentialRepo->add($credential);
	}

}
