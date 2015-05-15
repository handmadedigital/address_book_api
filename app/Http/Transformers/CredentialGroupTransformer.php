<?php namespace ThreeAccents\Http\Transformers;

use League\Fractal\TransformerAbstract;
use ThreeAccents\Companies\Entities\CredentialGroup;

class CredentialGroupTransformer extends TransformerAbstract
{
    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected $availableIncludes = [
        'credentials'
    ];

    public function transform(CredentialGroup $group)
    {
        return [
            'id' => (int) $group->id,
            'name' => $group->name
        ];
    }

    /**
     * @param CredentialGroup $group
     * @return \League\Fractal\Resource\Collection
     */
    public function includeCredentials(CredentialGroup $group)
    {
        $credentials = $group->credentials;

        return $this->collection($credentials, new CredentialTransformer, 'credentials');
    }
}