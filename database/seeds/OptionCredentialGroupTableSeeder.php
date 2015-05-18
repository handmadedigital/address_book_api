<?php

use Illuminate\Support\Facades\DB;

class OptionCredentialGroupTableSeeder extends AbstractSeeder
{
    public function run()
    {
        DB::table('credential_groups')->truncate();

        $groups = ['host', 'cPanel', 'website', 'gmail', 'ftp'];


        for($c = 1; $c <= 8; $c++)
        {
            foreach($groups as $group)
            {
                DB::table('credential_groups')->insert([
                    'company_id' => $c,
                    'name' => $group
                ]);
            }
        }

    }
}