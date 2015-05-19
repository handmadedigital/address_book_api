<?php namespace ThreeAccents\Http\Transformers;

use League\Fractal\TransformerAbstract;
use ThreeAccents\Companies\Entities\CompanyDetail;

class CompanyDetailTransformer extends TransformerAbstract
{
    public function transform(CompanyDetail $detail)
    {
        return [
            'id' => (int) $detail->id,
            'company_id' => (int) $detail->company->id,
            'address' => $detail->address,
            'city' => ucwords($detail->city),
            'state' => ucwords($detail->state->name),
            'country' => ucwords($detail->country),
            'zip_code' => $detail->zip_code,
            'unformatted_phone_number' => $detail->phone,
            'formatted_phone_number' => formatPhone($detail->phone),
            'email' => $detail->email,
        ];
    }
}