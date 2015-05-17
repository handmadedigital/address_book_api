<?php namespace ThreeAccents\Handlers\Commands;

use ThreeAccents\Commands\AddCredentialOptionCommand;

use Illuminate\Queue\InteractsWithQueue;
use ThreeAccents\Companies\Entities\CredentialOption;

class AddCredentialOptionCommandHandler {

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
	 * @param  AddCredentialOptionCommand  $command
	 * @return void
	 */
	public function handle(AddCredentialOptionCommand $command)
	{
		CredentialOption::create([
			'name' => $command->getName(),
			'slug' => $this->sluggify($command->getName())
		]);
	}

	public function sluggify($text)
	{
		// replace non letter or digits by -
		$text = preg_replace('~[^\\pL\d]+~u', '-', $text);

		// trim
		$text = trim($text, '-');

		// transliterate
		$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

		// lowercase
		$text = strtolower($text);

		// remove unwanted characters
		$text = preg_replace('~[^-\w]+~', '', $text);

		if (empty($text))
		{
			return 'n-a';
		}

		return $text;
	}

}
