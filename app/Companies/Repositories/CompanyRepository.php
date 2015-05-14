<?php namespace ThreeAccents\Companies\Repositories;

use ThreeAccents\Companies\Entities\Company;

class CompanyRepository
{
    /**
     * @var Company
     */
    protected $model;

    /**
     * @param Company $model
     */
    function __construct(Company $model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->model->get();
    }
}