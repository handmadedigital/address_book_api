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
    $router->get('/{company_slug}/credential-groups', ['as' => 'companies', 'uses' => 'Company\CredentialController@getCredentialGroups']);
    $router->post('/company/add-company', ['as' => 'add.company', 'uses' => 'Company\CompanyController@postAddCompany']);
    $router->post('/{company_slug}/credential/add-credential-group', ['as' => 'add.company', 'uses' => 'Company\CredentialController@postAddCredentialGroup']);
});
