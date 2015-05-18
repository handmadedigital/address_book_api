<?php namespace ThreeAccents\Handlers\Commands;

use ThreeAccents\Commands\AddCredentialGroupCommand;

use Illuminate\Queue\InteractsWithQueue;
use ThreeAccents\Companies\Entities\CredentialGroup;

class AddCredentialGroupCommandHandler
{

	/**
	 * Handle the command.
	 *
	 * @param  AddCredentialGroupCommand  $command
	 * @return void
	 */
	public function handle(AddCredentialGroupCommand $command)
	{
		CredentialGroup::create([
			'name' => $command->getName()
		]);
	}

}
