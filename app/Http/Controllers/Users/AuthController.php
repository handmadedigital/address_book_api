<?php namespace ThreeAccents\Http\Controllers\Users;

use ThreeAccents\Commands\UserRegisterCommand;
use ThreeAccents\Http\Controllers\ApiController;
use ThreeAccents\Http\Requests\RegisterRequest;

class AuthController extends ApiController
{
    public function register(RegisterRequest $request)
    {
        $this->dispatchFrom(UserRegisterCommand::class, $request);

        return $this->respondWithArray([
            'message' => 'User was registered'
        ]);
    }
}