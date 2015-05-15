<?php namespace ThreeAccents\Http\Transformers;

use League\Fractal\TransformerAbstract;
use ThreeAccents\Companies\Entities\CompanyDetail;

class CompanyDetailTransformer extends TransformerAbstract
{
    public function transform(CompanyDetail $detail)
    {
        return [
            'address' => $detail->address,
            'city' => $detail->city->name,
            'state' => $detail->state->name,
            'country' => $detail->country,
            'zip_code' => $detail->zip_code,
            'phone_number' => $detail->phone,
        ];
    }
}