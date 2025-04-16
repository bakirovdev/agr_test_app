<?php

namespace Http\Company\Employee\Tests\Employee;

class ShowTest extends _TestCase
{
    public function test_success():void
    {
        $this->sendRequest(
            path: '1',
        );
    }
}
