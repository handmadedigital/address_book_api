<?php namespace ThreeAccents\Companies\Repositories;

use ThreeAccents\Companies\Entities\CredentialOption;

class CredentialOptionRepository
{
    protected $model;

    function __construct(CredentialOption $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->get();
    }
}