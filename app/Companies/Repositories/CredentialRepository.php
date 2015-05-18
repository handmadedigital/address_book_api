<?php namespace ThreeAccents\Companies\Repositories;

use ThreeAccents\Companies\Entities\Credential;

class CredentialRepository
{
    protected $model;

    function __construct(Credential $model)
    {
        $this->model = $model;
    }

    public function add($credential)
    {
        $this->model->company_id = $credential->company_id;
        $this->model->credential_group_id = $credential->credential_group_id;
        $this->model->credential_option_id = $credential->credential_option_id;
        $this->model->credential = $credential->credential;

        $this->model->save();
    }
}