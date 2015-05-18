<?php namespace ThreeAccents\Companies\Services;

use ThreeAccents\Companies\Entities\CredentialGroup;

class CredentialService
{
    public function getCredentialGroups()
    {
        return CredentialGroup::all();
    }
}