<?php 
$I = new ApiTester($scenario);
$I->wantTo('Add a company via api');

$I->haveHttpHeader('Content-Type', 'application/x-www-form-urlencoded');
$I->sendPOST('company', [
    'name' => 'test',
    'address' => 'test addresss',
    'city' => 'miami',
    'state' => 5,
    'zip_code' => 6565,
    'phone_number' => 54844,
    'email' => 'test@codeception.com'
]);
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
$I->seeResponseContains('{"message":"Company was added!"}');