<?php

namespace Http\Admin\Company\Tests\Company;


class StoreTest extends _TestCase
{
    public function test_success():void
    {
        $this->sendRequest(
            method: 'POST',
            body: [
                'name' => 'company c1',
                'address' => '123 str',
                'website' => 'test.company.com',
                'phone_number' => '993339922',
                'director' => [
                    'email' => 'director13@local.host',
                    'password' => 'test123'
                ]
            ],
            assertStatus: 201
        );
    }
}
