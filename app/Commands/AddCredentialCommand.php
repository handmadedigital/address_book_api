<?php namespace ThreeAccents\Commands;

class AddCredentialCommand extends Command
{
	protected $credential;
	protected $option;
	protected $group;
	protected $company_id;

	function __construct($credential, $option, $group, $company_id)
	{
		$this->credential = $credential;
		$this->option = $option;
		$this->group = $group;
		$this->company_id = $company_id;
	}

	/**
	 * @return mixed
	 */
	public function getCompanyId()
	{
		return $this->company_id;
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
