<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Modules\User\Enums\UserTypeEnum;

return new class extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'email' => 'admin@local.host',
                'password' => Hash::make('test123'),
                'type' => UserTypeEnum::ADMIN->value,
                'password' => Hash::make('test123'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'email' => 'company1@local.host',
                'type' => UserTypeEnum::COMPANY->value,
                'password' => Hash::make('test123'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'email' => 'company2@local.host',
                'type' => UserTypeEnum::COMPANY->value,
                'password' => Hash::make('test123'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

        ]);
    }
};
