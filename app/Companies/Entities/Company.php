<?php namespace ThreeAccents\Companies\Entities;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

	protected $fillable = ['name', 'address', 'city', 'state', 'country', 'zip_code', 'phone_number', 'email'];

	/*********************/
	/*
	 * COMMAND
	 */
	/*********************/

	public static function add($name, $address, $city, $state, $country, $zip_code, $phone_number, $email)
	{
		return new static(compact('name', 'address', 'city', 'state', 'country', 'zip_code', 'phone_number', 'email'));
	}

	/*********************/
	/*
	 * RELATIONSHIPS
	 */
	/*********************/

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function detail()
	{
		return $this->hasOne('ThreeAccents\Companies\Entities\CompanyDetail');
	}

	public function employees()
	{
		return $this->hasMany('ThreeAccents\Companies\Entities\Employee');
	}

	public function credentialGroups()
	{
		return $this->hasMany('ThreeAccents\Companies\Entities\CredentialGroup');
	}

}
