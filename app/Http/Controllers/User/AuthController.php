<?php namespace ThreeAccents\Http\Controllers\User;

use ThreeAccents\Commands\UserRegisterCommand;
use ThreeAccents\Http\Controllers\ApiController;
use ThreeAccents\Http\Requests\LoginRequest;
use ThreeAccents\Http\Requests\RegisterRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\JWTAuth;

class AuthController extends ApiController
{
    /**
     * @var JWTAuth
     */
    protected $auth;

    function __construct(JWTAuth $auth)
    {
        $this->auth = $auth;
    }

    public function postRegister(RegisterRequest $request)
    {
        $this->dispatchFrom(UserRegisterCommand::class, $request);

        return $this->respondWithArray([
            'message' => 'User was registered'
        ]);
    }

    public function postLogin(LoginRequest $request)
    {
        // grab credentials from the request
        $credentials = $request->only('username', 'password');

        try {
            // attempt to verify the credentials and create a token for the user
            if (! $token = $this->auth->attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        // all good so return the token
        return response()->json(compact('token'));
    }
}