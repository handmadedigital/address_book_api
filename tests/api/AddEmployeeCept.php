<?php 
$I = new ApiTester($scenario);
$I->wantTo('Add a new employee');

$I->haveHttpHeader('Content-Type', 'application/x-www-form-urlencoded');
$I->sendPOST('employee', [
    'company_id' => 1,
    'first_name' => 'test',
    'last_name' => 'test_last',
    'phone_number' => 54844,
    'email' => 'test@codeception.com'
]);
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
$I->seeResponseContains('{"message":"Employee was added!"}');