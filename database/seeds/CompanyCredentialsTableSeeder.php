<?php

use ThreeAccents\Companies\Entities\Credential;

class CompanyCredentialsTableSeeder extends AbstractSeeder
{
    public function run()
    {
        Credential::truncate();
        Credential::unguard();

        $id = 1;

        for($c = 1; $c <= 8; $c++)
        {
            for($co = 1; $co <= 6; $co++)
            {
                Credential::create([
                    'company_id' => $c,
                    'credential_option_id' => $co,
                    'credential' => 'lorem',
                    'credential_group_id' => $id,
                ]);
            }
        }
    }
}