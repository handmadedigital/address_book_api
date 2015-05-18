<?php namespace ThreeAccents\Companies\Entities;

use Illuminate\Database\Eloquent\Model;

class Credential extends Model
{
    protected $fillable = ['credential_option_id', 'credential_group_id', 'credential', 'company_id'];

    /*********************/
    /*
     * COMMANDS
     */
    /*********************/

    public static function add($company_id, $credential_group_id, $credential_option_id, $credential)
    {
        return new static(compact('company_id', 'credential_group_id', 'credential_option_id', 'credential'));
    }

    /*********************/
    /*
     * RELATIONSHIPS
     */
    /*********************/

    public function option()
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