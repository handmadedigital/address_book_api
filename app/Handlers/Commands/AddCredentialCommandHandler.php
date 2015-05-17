<?php namespace ThreeAccents\Handlers\Commands;

use ThreeAccents\Commands\AddCredentialCommand;

use Illuminate\Queue\InteractsWithQueue;
use ThreeAccents\Companies\Entities\Credential;

class AddCredentialCommandHandler {

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
	 * @param  AddCredentialCommand  $command
	 * @return void
	 */
	public function handle(AddCredentialCommand $command)
	{
		Credential::create([
			'credential_option_id' => $command->getOption(),
			'credential_group_id' => $command->getGroup(),
			'credential' => $command->getCredential()
		]);
	}

}
