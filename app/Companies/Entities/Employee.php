<?php namespace ThreeAccents\Companies\Entities;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'company_id',
        'first_name',
        'last_name',
        'email',
        'phone'
    ];

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
        return $this->hasOne('ThreeAccents\Companies\Entities\EmployeeDetail');
    }
}