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

    $router->get('/companies', ['as' => 'companies', 'uses' => 'Company\CompanyController@getCompanies']);
    $router->get('/{company_slug}/details', ['as' => 'companies', 'uses' => 'Company\CompanyController@getCompany']);
    $router->get('/credential-groups', ['as' => 'companies', 'uses' => 'Company\CredentialController@getCredentialGroups']);
    $router->get('/credential-options', ['as' => 'companies', 'uses' => 'Company\CredentialController@getCredentialOptions']);
    $router->post('/company', ['as' => 'add.company', 'uses' => 'Company\CompanyController@postAddCompany']);
    $router->post('/employee', ['as' => 'add.employee', 'uses' => 'Company\CompanyController@postAddEmployee']);
    $router->post('/credential', ['as' => 'add.credential', 'uses' => 'Company\CredentialController@postAddCredential']);
    $router->post('/credential-group', ['as' => 'add.credential-group', 'uses' => 'Company\CredentialController@postAddCredentialGroup']);
    $router->post('/credential-option', ['as' => 'add.credential-option', 'uses' => 'Company\CredentialController@postAddCredentialOption']);
});
