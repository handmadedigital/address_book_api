<?php namespace ThreeAccents\Companies\Entities;

use Illuminate\Database\Eloquent\Model;

class CompanyDetail extends Model
{

	protected $fillable = ['company_id', 'address', 'city_id', 'state_id', 'country', 'zip_code', 'phone'];


	/*********************/
	/*
	 * RELATIONSHIPS
	 */
	/*********************/

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function city()
	{
		return $this->belongsTo('ThreeAccents\Locations\Entities\City');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function state()
	{
		return $this->belongsTo('ThreeAccents\Locations\Entities\State');
	}

}
