<?php


class CredentialControllerTest extends TestCase
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

    public function test_collection_credential_groups()
    {
        $response = $this->call('GET', '/api/v1/credential-groups');

        $this->assertEquals(200, $response->getStatusCode());
    }

    public function test_collection_credential_options()
    {
        $response = $this->call('GET', '/api/v1/credential-options');

        $this->assertEquals(200, $response->getStatusCode());
    }
}