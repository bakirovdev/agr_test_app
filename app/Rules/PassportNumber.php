<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PassportNumber implements Rule
{
    public function passes($attribute, $value)
    {
        return preg_match('/^[A-Z]{2}\d{7}$/', $value);
    }

    public function message()
    {
        return __('validation.passport_number');
    }
}
