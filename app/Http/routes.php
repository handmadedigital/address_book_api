<?php

$router->group(['prefix' => 'api/v1/'], function($router)
{
    /*
     * AUTHENTICATION
     */
    $router->group(['prefix' => 'auth/'], function($router)
    {
        $router->post('/register', ['as' => 'register', 'uses' => 'User\AuthController@postRegister']);
        $router->post('/login', ['as' => 'login', 'uses' => 'User\AuthController@postLogin']);
    });

    $router->get('/companies', ['as' => 'companies', 'uses' => 'Company\CompanyController@getCompanies', 'middleware' => 'jwt.auth']);
});
