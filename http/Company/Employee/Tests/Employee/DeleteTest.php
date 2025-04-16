<?php

namespace Http\Company\Employee\Tests\Employee;

use Modules\Employee\Models\Employee;

class DeleteTest extends _TestCase
{
    public function test_delete_success():void
    {
        $this->sendRequest(
            method: 'DELETE',
            path: '1',
        );
    }

    public function test_restore_success(): void
    {
        Employee::query()->findOrFail(1)->delete();
        $this->sendRequest(
            method: 'DELETE',
            path: '1/restore',
        );
    }
}
