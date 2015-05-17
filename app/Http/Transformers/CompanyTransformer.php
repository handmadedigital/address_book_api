<?php namespace ThreeAccents\Http\Transformers;

use League\Fractal\TransformerAbstract;
use ThreeAccents\Companies\Entities\Company;

class CompanyTransformer extends TransformerAbstract
{
    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected $availableIncludes = [
        'detail',
        'employees',
        'credential_groups'
    ];

    public function transform(Company $company)
    {
        return [
            'id'   => (int) $company->id,
            'name' => ucwords($company->name),
            'slug' => $company->slug
        ];
    }

    /**
     * Include Company Detail
     *
     * @param Company $company
     * @return \League\Fractal\Resource\Item
     */
    public function includeDetail(Company $company)
    {
        $detail = $company->detail;

        return $this->item($detail, new CompanyDetailTransformer, 'detail');
    }

    /**
     * @param Company $company
     * @return \League\Fractal\Resource\Collection
     */
    public function includeCredentialGroups(Company $company)
    {
        $credential_group = $company->credentialGroup;

        return $this->collection($credential_group, new CredentialGroupTransformer, 'credentialGroups');
    }

    /**
     * @param Company $company
     * @return \League\Fractal\Resource\Collection
     */
    public function includeEmployees(Company $company)
    {
        $employees = $company->employees;

        return $this->collection($employees, new EmployeeTransformer, 'employees');
    }
}