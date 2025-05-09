<?php

namespace Http\Admin\Company\Tests\Company;

use Modules\Company\Models\Company;

class DeleteTest extends _TestCase
{
    public function test_delete_success():void
    {
        $this->sendRequest(
            method: 'DELETE',
            path: '2',
        );
    }

    public function test_restore_success(): void
    {
        Company::query()->findOrFail(2)->delete();
        $this->sendRequest(
            method: 'DELETE',
            path: '2/restore',
        );
    }
}
