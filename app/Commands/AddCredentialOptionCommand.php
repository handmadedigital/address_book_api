<?php namespace ThreeAccents\Commands;

class AddCredentialOptionCommand extends Command
{

	protected $name;

	function __construct($name)
	{
		$this->name = $name;
	}

	/**
	 * @return mixed
	 */
	public function getName()
	{
		return $this->name;
	}

}
