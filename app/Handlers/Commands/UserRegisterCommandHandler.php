<?php namespace ThreeAccents\Handlers\Commands;

use ThreeAccents\Commands\UserRegisterCommand;

use Illuminate\Queue\InteractsWithQueue;
use ThreeAccents\Users\Entities\User;
use ThreeAccents\Users\Repositories\UserRepository;

class UserRegisterCommandHandler
{
	protected $userRepo;

	/**
	 * Create the command handler.
	 *
	 * @param UserRepository $userRepo
	 */
	public function __construct(UserRepository $userRepo)
	{
		$this->userRepo = $userRepo;
	}

	/**
	 * Handle the command.
	 *
	 * @param  UserRegisterCommand  $command
	 * @return void
	 */
	public function handle(UserRegisterCommand $command)
	{
		$user = User::register($command->getUsername(), $command->getEmail(), $command->getPassword());

		$this->userRepo->register($user);
	}

}
