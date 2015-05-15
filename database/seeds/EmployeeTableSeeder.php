<?php

use ThreeAccents\Companies\Entities\Employee;

class EmployeeTableSeeder extends AbstractSeeder
{
    public function run()
    {
        Employee::unguard();
        Employee::truncate();

        for($i = 1; $i <= 8; $i++)
        {
            for($e = 1; $e < 3; $e++)
            {
                Employee::create([
                    'company_id' => $i,
                    'first_name' => 'peter',
                    'last_name' => 'griffin',
                    'email' => 'peter@email.com',
                    'phone' => 9543030759,
                ]);
            }
        }
    }
}