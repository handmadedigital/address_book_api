<?php


class CompanyControllerTest extends TestCase
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function test_company_collection_api()
    {
        $response = $this->call('GET', '/api/v1/companies');

        $this->assertEquals(200, $response->getStatusCode());
    }

    public function test_company_collection_with_company_detail()
    {
        $contains_detail = false;

        $response = $this->call('GET', '/api/v1/companies?includes=detail');

        if(strpos($response, 'detail')) $contains_detail = true;

        $this->assertEquals(true, $contains_detail);
    }

    public function test_company_collection_with_company_employees()
    {
        $contains_employees = false;

        $response = $this->call('GET', '/api/v1/companies?includes=employees');

        if(strpos($response, 'employees')) $contains_employees = true;

        $this->assertEquals(true, $contains_employees);
    }

    public function test_company_collection_with_company_credentials_groups()
    {
        $contains_credential_groups= false;

        $response = $this->call('GET', '/api/v1/companies?includes=credential_groups');

        if(strpos($response, 'credential_groups')) $contains_credential_groups = true;

        $this->assertEquals(true, $contains_credential_groups);
    }

    public function test_company_collection_with_company_credentials_groups_credentials()
    {
        $contains_credential_groups_credentials = false;

        $response = $this->call('GET', '/api/v1/companies?includes=credential_groups.credentials');

        if(strpos($response, 'credentials')) $contains_credential_groups_credentials = true;

        $this->assertEquals(true, $contains_credential_groups_credentials);
    }

    public function test_company_returns_all_its_relationships()
    {
        $contains_all_relationships = false;

        $response = $this->call('GET', '/api/v1/companies?includes=detail,employees,credential_groups.credentials');

        if(strpos($response, 'detail') and strpos($response, 'employees') and strpos($response, 'credential_groups') and strpos($response, 'credentials')) $contains_all_relationships = true;

        $this->assertEquals(true, $contains_all_relationships);
    }


}