<?php namespace ThreeAccents\Companies\Entities;

use Illuminate\Database\Eloquent\Model;

class Credential extends Model
{
    protected $fillable = ['credential_option_id', 'credential_group_id', 'credential'];

    /*********************/
    /*
     * RELATIONSHIPS
     */
    /*********************/

    public function credentialOption()
    {
        return $this->belongsTo('ThreeAccents\Companies\Entities\CredentialOption');
    }

    public function group()
    {
        return $this->belongsTo('ThreeAccents\Companies\Entities\CredentialGroup');
    }

    public function company()
    {
        return $this->belongsTo('ThreeAccents\Companies\Entities\Company');

    }
}