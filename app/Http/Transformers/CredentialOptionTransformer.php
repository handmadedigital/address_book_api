<?php namespace ThreeAccents\Http\Transformers;

use League\Fractal\TransformerAbstract;
use ThreeAccents\Companies\Entities\CredentialOption;

class CredentialOptionTransformer extends TransformerAbstract
{
    public function transform(CredentialOption $option)
    {
        return [
            'id' => (int) $option->id,
            'name' => $option->name
        ];
    }
}