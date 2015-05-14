<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$router->post('api/auth/register', ['as' => 'register', 'uses' => 'Users\AuthController@register']);

$router->get('api/lol', function(){
    return response()->json([
        'message' => 'got em!',
    ]);
});
