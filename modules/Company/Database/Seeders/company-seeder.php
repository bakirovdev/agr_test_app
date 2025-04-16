<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

return new class extends Seeder
{
    public function run()
    {
        DB::table('companies')->insert([
            [
                'name' => 'Company A',
                'address' => '123 Main St',
                'website' => 'www.companya.com',
                'phone_number' => '998993397707',
                'director_id' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Company B',
                'address' => '123 Main St',
                'website' => 'www.companya.com',
                'phone_number' => '998993397707',
                'director_id' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
};
