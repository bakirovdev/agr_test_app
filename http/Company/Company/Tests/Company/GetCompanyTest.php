<?php

namespace Http\Company\Company\Tests\Company;


class GetCompanyTest extends _TestCase
{
    public function test_success():void
    {
        $this->sendRequest(
            path: 'get-company',
            assertStatus: 200
        );
    }
}
