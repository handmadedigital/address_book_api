<?php

use ThreeAccents\Companies\Entities\CompanyDetail;

class CompanyDetailSeederTable extends AbstractSeeder
{

    public function run()
    {
        $cities = ['weston', 'miami', 'chicago', 'fort lauderdale', 'new york', 'coral springs'];

        CompanyDetail::unguard();

        CompanyDetail::truncate();

        for($i = 1; $i <= 8; $i++)
        {
            CompanyDetail::create([
                'company_id' => $i,
                'address' => '1515 n university dr',
                'city' => $cities[rand(0, 5)],
                'state_id' => rand(1, 50),
                'country' => 'usa',
                'zip_code' => 33071,
                'phone' => 9543030759
            ]);
        }
    }
}