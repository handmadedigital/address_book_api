<?php namespace ThreeAccents\Commands;

class AddCredentialCommand extends Command
{
	protected $credential;
	protected $option;
	protected $group;

	function __construct($credential, $option, $group)
	{
		$this->credential = $credential;
		$this->option = $option;
		$this->group = $group;
	}

	/**
	 * @return mixed
	 */
	public function getCredential()
	{
		return $this->credential;
	}

	/**
	 * @return mixed
	 */
	public function getOption()
	{
		return $this->option;
	}

	/**
	 * @return mixed
	 */
	public function getGroup()
	{
		return $this->group;
	}
}
