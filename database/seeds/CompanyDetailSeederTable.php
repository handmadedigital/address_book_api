<?php

use ThreeAccents\Companies\Entities\CompanyDetail;

class CompanyDetailSeederTable extends AbstractSeeder
{

    public function run()
    {
        CompanyDetail::unguard();

        CompanyDetail::truncate();

        for($i = 1; $i <= 8; $i++)
        {
            CompanyDetail::create([
                'company_id' => $i,
                'address' => '1515 n university dr',
                'city_id' => 1,
                'state_id' => 5,
                'country' => 'usa',
                'zip_code' => 33071,
                'phone' => 9543030759
            ]);
        }
    }
}