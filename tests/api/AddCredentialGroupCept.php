<?php 
$I = new ApiTester($scenario);
$I->wantTo('Add a new credential group');

$I->haveHttpHeader('Content-Type', 'application/x-www-form-urlencoded');
$I->sendPOST('credential-group', [
    'name' => 'test-group',
]);
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
$I->seeResponseContains('{"message":"Credential group was added"}');