<?php

namespace Http\Company\Employee\Requests;

use App\Rules\PassportNumber;
use Illuminate\Validation\Rule;
use App\Http\Requests\BaseRequest;

class EmployeeRequests extends BaseRequest
{

    public function nonLocalizedRules(): array
    {
        return [
            'phone_number' => [
                'required',
                'string',
                'min:9',
                'max:9'
            ],
            'first_name' => [
                'required',
                'string',
                'max:50'
            ],
            'last_name' => [
                'required',
                'string',
                'max:50'
            ],
            'middle_name' => [
                'required',
                'string',
                'max:50'
            ],
            'address' => [
                'required',
                'string',
            ],
            'passport_number' => [
                'required',
                'string',
                'max:9',
                new PassportNumber(),
                Rule::unique('employees', 'passport_number')
                    ->where('company_id', request()->user()->company->id)
                    ->ignore($this->model->id)
            ],
        ];
    }

    protected function passedValidation(): void
    {
        parent::passedValidation();

        $this->validatedData['company_id'] = request()->user()->company->id;
    }
}
