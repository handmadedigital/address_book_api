<?php namespace ThreeAccents\Http\Transformers;

use League\Fractal\TransformerAbstract;
use ThreeAccents\Companies\Entities\Credential;

class CredentialTransformer extends TransformerAbstract
{
    public function transform(Credential $credential)
    {
        return [
            'id' => (int) $credential->id,
            'credential_option' => $credential->credentialOption->name,
            'credential' => $credential->credential
        ];
    }
}