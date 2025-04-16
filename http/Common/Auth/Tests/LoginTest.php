<?php

namespace Http\Common\Auth\Tests;

use App\Helpers\FileHelper;
use Illuminate\Http\UploadedFile;

/**
     * This is a sample method.
     *
     * @return void
     */
class LoginTest extends _TestCase
{
    public function test_admin(): void
    {
        $this->sendRequest(
            method: 'POST',
            path: 'login',
            body:[
                'email' => 'admin@local.host',
                'password' => 'test123',
            ]
        );
    }

    public function test_company(): void
    {
        $this->sendRequest(
            method: 'POST',
            path: 'login',
            body:[
                'email' => 'company1@local.host',
                'password' => 'test123',
            ]
        );
    }
}
