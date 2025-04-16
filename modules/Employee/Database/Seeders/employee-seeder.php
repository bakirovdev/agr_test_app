<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

return new class extends Seeder
{
    public function run()
    {
        DB::table('employees')->insert([
            [
                'passport_number' => 'ZZ1234567',
                'last_name' => 'Employee1 Last Name',
                'first_name' => 'Employee1 First Name',
                'middle_name' => 'Employee1 Middle Name',
                'phone_number' => '998993397707',
                'address' => '123 Main St',
                'company_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'passport_number' => 'ZZ1234567',
                'last_name' => 'Employee1 Last Name',
                'first_name' => 'Employee1 First Name',
                'middle_name' => 'Employee1 Middle Name',
                'phone_number' => '998993397707',
                'address' => '123 Main St',
                'company_id' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
};
