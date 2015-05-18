<?php namespace ThreeAccents\Commands;

use ThreeAccents\Commands\Command;

class AddEmployeeCommand extends Command
{
	protected $company_id;
	protected $first_name;
	protected $last_name;
	protected $email;
	protected $phone;

	function __construct($company_id, $first_name, $last_name = null, $email = null, $phone = null)
	{
		$this->company_id = $company_id;
		$this->first_name = $first_name;
		$this->last_name = $last_name;
		$this->email = $email;
		$this->phone = $phone;
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
	public function getFirstName()
	{
		return $this->first_name;
	}

	/**
	 * @return mixed
	 */
	public function getLastName()
	{
		return $this->last_name;
	}

	/**
	 * @return mixed
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * @return mixed
	 */
	public function getPhone()
	{
		return $this->phone;
	}
}
