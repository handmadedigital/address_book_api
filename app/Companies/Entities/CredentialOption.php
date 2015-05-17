<?php namespace ThreeAccents\Companies\Entities;

use Illuminate\Database\Eloquent\Model;

class CredentialOption extends Model
{
    protected $fillable = ['name', 'slug'];

    /*********************/
    /*
     * RELATIONSHIPS
     */
    /*********************/

    public function group()
    {
        return $this->belongsTo('ThreeAccents\Companies\Entities\CredentialOptionGroup');
    }

    public function credentials()
    {
        return $this->hasMany('ThreeAccents\Companies\Entities\Credential');
    }
}