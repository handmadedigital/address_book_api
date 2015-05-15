<?php

use ThreeAccents\Companies\Entities\CredentialOption;

class CredentialOptionsTableSeeder extends AbstractSeeder
{
    public function run()
    {
        CredentialOption::truncate();

        $options = ['host_username', 'host_password', 'cpanel_login', 'cpanel_password', 'website_username', 'website_password'];

        foreach($options as $option)
        {
            CredentialOption::create([
                'name' => $option,
                'slug' => $this->sluggify($option)
            ]);
        }
    }
}