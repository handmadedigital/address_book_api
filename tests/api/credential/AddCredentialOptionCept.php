<?php 
$I = new ApiTester($scenario);
$I->wantTo('Add a new credential option');

$I->haveHttpHeader('Content-Type', 'application/x-www-form-urlencoded');
$I->sendPOST('credential-option', [
    'name' => 'test-group',
]);
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
$I->seeResponseContains('{"message":"Credential option was added"}');