<?php namespace ThreeAccents\Commands;

class AddCompanyCommand extends Command
{
	protected $name;
	protected $address;
	protected $city;
	protected $state;
	protected $zip_code;
	protected $country;
	protected $phone_number;

	function __construct($name, $address = null, $city = null, $state = null, $zip_code = null, $country = 'usa', $phone_number = null)
	{
		$this->name = $name;
		$this->address = $address;
		$this->city = $city;
		$this->state = $state;
		$this->zip_code = $zip_code;
		$this->country = $country;
		$this->phone_number = $phone_number;
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
	public function getAddress()
	{
		return $this->address;
	}

	/**
	 * @return mixed
	 */
	public function getCity()
	{
		return $this->city;
	}

	/**
	 * @return mixed
	 */
	public function getState()
	{
		return $this->state;
	}

	/**
	 * @return mixed
	 */
	public function getZipCode()
	{
		return $this->zip_code;
	}

	/**
	 * @return mixed
	 */
	public function getCountry()
	{
		return $this->country;
	}

	/**
	 * @return mixed
	 */
	public function getPhoneNumber()
	{
		return $this->phone_number;
	}

}
