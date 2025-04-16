<?php

namespace Http\Company\Company\Tests\Company;


class UpdateTest extends _TestCase
{
    public function test_success():void
    {
        $this->sendRequest(
            method: 'PUT',
            path: 'update-company',
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
