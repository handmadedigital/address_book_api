<?php 
$I = new ApiTester($scenario);
$I->wantTo('Add a new credential');

$I->haveHttpHeader('Content-Type', 'application/x-www-form-urlencoded');
$I->sendPOST('credential', [
    'company_id' => 1,
    'group' => 1,
    'option' => 1,
    'credential' => 'test_cred'
]);
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
$I->seeResponseContains('{"message":"Credential was added"}');
