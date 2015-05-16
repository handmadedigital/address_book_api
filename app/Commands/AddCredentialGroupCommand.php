<?php namespace ThreeAccents\Commands;

class AddCredentialGroupCommand extends Command {

	protected $name;
	protected $company_id;

	function __construct($name, $company_id)
	{
		$this->name = $name;
		$this->company_id = $company_id;
	}

	/**
	 * @return mixed
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @return mixed
	 */
	public function getCompanyId()
	{
		return $this->company_id;
	}

}
