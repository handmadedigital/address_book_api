<?php namespace ThreeAccents\Companies\Entities;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
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