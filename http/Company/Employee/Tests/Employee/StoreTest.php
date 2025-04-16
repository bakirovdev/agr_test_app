<?php

namespace Http\Company\Employee\Tests\Employee;

class StoreTest extends _TestCase
{
    public function test_success():void
    {
        $this->sendRequest(
            method: 'POST',
            body: [
                'first_name' => 'first_name',
                'last_name' => 'last_name',
                'middle_name' => 'middle_name',
                'address' => 'main str 22122',
                'phone_number' => '911383733',
                'passport_number' =>'ZZ1234568'
            ],
            assertStatus: 201
        );
    }
}
