<?php

use Illuminate\Support\Facades\DB;

class OptionCredentialGroupTableSeeder extends AbstractSeeder
{
    public function run()
    {
        DB::table('credential_groups')->truncate();

        $groups = ['host', 'cPanel', 'website', 'gmail', 'ftp'];


        foreach($groups as $group)
        {
            DB::table('credential_groups')->insert([
                'name' => $group
            ]);
        }

    }
}