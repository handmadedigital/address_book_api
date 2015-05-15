<?php

use Illuminate\Support\Facades\DB;

class StateTableSeeder extends AbstractSeeder
{
    public function run()
    {
        DB::statement("SET foreign_key_checks = 0");

        DB::table('states')->truncate();

        $states = ['Alabama\tAL', 'Alaska\tAK', 'Arizona\tAZ', 'Arkansas\tAR', 'California\tCA', 'Colorado\tCO', 'Connecticut\tCT', 'Delaware\tDE', 'Florida\tFL', 'Georgia\tGA', 'Hawaii\tHI', 'Idaho\tID', 'Illinois\tIL', 'Indiana\tIN', 'Iowa\tIA', 'Kansas\tKS', 'Kentucky\tKY', 'Louisiana\tLA', 'Maine\tME', 'Maryland\tMD', 'Massachusetts\tMA', 'Michigan\tMI', 'Minnesota\tMN', 'Mississippi\tMS', 'Missouri\tMO', 'Montana\tMT', 'Nebraska\tNE', 'Nevada\tNV', 'New Hampshire\tNH', 'New Jersey\tNJ', 'New Mexico\tNM', 'New York\tNY', 'North Carolina\tNC', 'North Dakota\tND', 'Ohio\tOH', 'Oklahoma\tOK', 'Oregon\tOR', 'Pennsylvania\tPA', 'Rhode Island\tRI', 'South Carolina\tSC', 'South Dakota\tSD', 'Tennessee\tTN', 'Texas\tTX', 'Utah\tUT', 'Vermont\tVT', 'Virginia\tVA', 'Washington\tWA', 'West Virginia\tWV', 'Wisconsin\tWI', 'Wyoming\tWY', 'Washington DC\tDC', 'Armed Forces Americas\tAA', 'Armed Forces Europe\tAE', 'Armed Forces Pacific\tAP'];

        foreach($states as $state)
        {
            $boom = explode('\t', $state);

            DB::table('states')->insert([
                'name' => $boom[0],
                'slug' => $this->sluggify($boom[0]),
                'abbreviation' => $boom[1],
            ]);
        }
    }
}