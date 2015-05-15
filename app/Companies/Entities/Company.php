<?php namespace ThreeAccents\Companies\Entities;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

	protected $fillable = ['name', 'address', 'city', 'state', 'country', 'zip_code', 'phone_number'];

	/*********************/
	/*
	 * COMMAND
	 */
	/*********************/

	public static function add($name, $address, $city, $state, $country, $zip_code, $phone_number)
	{
		return new static(compact('name', 'address', 'city', 'state', 'country', 'zip_code', 'phone_number'));
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

	public function credentialGroup()
	{
		return $this->hasMany('ThreeAccents\Companies\Entities\CredentialGroup');
	}

}
