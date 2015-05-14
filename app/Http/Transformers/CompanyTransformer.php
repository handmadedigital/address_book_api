<?php namespace ThreeAccents\Http\Transformers;

use League\Fractal\TransformerAbstract;
use ThreeAccents\Companies\Entities\Company;

class CompanyTransformer extends TransformerAbstract
{
    public function transform(Company $company)
    {
        return [
            'id'   => (int) $company->id,
            'name' => $company->name,
            'slug' => $company->slug
        ];
    }
}