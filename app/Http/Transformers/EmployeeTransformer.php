<?php namespace ThreeAccents\Http\Transformers;

use League\Fractal\TransformerAbstract;
use ThreeAccents\Companies\Entities\Employee;

class EmployeeTransformer extends TransformerAbstract
{
    public function transform(Employee $employee)
    {
        return [
            'id' => (int) $employee->id,
            'first_name' => ucwords($employee->first_name),
            'last_name' => ucwords($employee->last_name),
            'email' => $employee->email,
            'unformatted_phone_number' => $employee->phone,
            'formatted_phone_number' => formatPhone($employee->phone),
        ];
    }
}