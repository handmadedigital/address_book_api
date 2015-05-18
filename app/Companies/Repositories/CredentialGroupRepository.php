<?php namespace ThreeAccents\Companies\Repositories;

use ThreeAccents\Companies\Entities\CredentialGroup;

class CredentialGroupRepository
{
    protected $model;

    function __construct(CredentialGroup $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->get();
    }
}