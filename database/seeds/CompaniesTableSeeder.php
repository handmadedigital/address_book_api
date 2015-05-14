<?php

use ThreeAccents\Companies\Entities\Company;

class CompaniesTableSeeder extends AbstractSeeder
{
    public function run()
    {
        Company::truncate();

        $companies = ['my broken phone', 'the sneaker list', 'island buyers club', 'hush hush', 'jaime mass', 'pc experts', 'living sculpture', 'barnett & lerner'];

        foreach($companies as $company)
        {
            Company::create([
                'name' => $company,
                'slug' => $this->sluggify($company),
                'img' => 'default-company.png'
            ]);
        }
    }
}