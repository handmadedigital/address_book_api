<?php namespace ThreeAccents\Users\Repositories;

use ThreeAccents\Users\Entities\User;

class UserRepository
{
    protected $model;

    function __construct(User $model)
    {
        $this->model = $model;
    }

    public function register($user)
    {
        $this->model->username = $user->username;
        $this->model->email = $user->email;
        $this->model->password = bcrypt($user->password);

        $this->model->save();
    }
}