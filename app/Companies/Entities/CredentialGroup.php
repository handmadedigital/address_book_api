<?php namespace ThreeAccents\Companies\Entities;

use Illuminate\Database\Eloquent\Model;

class CredentialGroup extends Model
{
	protected $fillable = ['company_id', 'name'];

	/****************************/
	/* RELATIONSHIPS */
	/***************************/

	public function credentials()
	{
		return $this->hasMany('ThreeAccents\Companies\Entities\Credential');
	}


}
