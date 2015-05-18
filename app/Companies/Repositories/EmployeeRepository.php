<?php namespace ThreeAccents\Companies\Repositories;


use ThreeAccents\Companies\Entities\Employee;

class EmployeeRepository
{
    protected $model;

    function __construct(Employee $model)
    {
        $this->model = $model;
    }

    public function add($employee)
    {
        $this->model->company_id = $employee->company_id;
        $this->model->first_name = $employee->first_name;
        $this->model->last_name = $employee->last_name;
        $this->model->email = $employee->email;
        $this->model->phone = $employee->phone;

        $this->model->save();
    }
}