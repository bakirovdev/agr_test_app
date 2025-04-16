<?php

namespace Http\Admin\Company\Requests;

use Illuminate\Validation\Rule;
use App\Http\Requests\BaseRequest;
use Illuminate\Support\Facades\Hash;
use Modules\User\Enums\UserTypeEnum;

class CompanyRequest extends BaseRequest
{

    public function nonLocalizedRules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                Rule::unique('companies', 'name')
                    ->ignore($this->model->id)
            ],
            'address' => [
                'required',
                'string',
            ],
            'website' => [
                'required',
                'string',
            ],
            'phone_number' => [
                'required',
                'string',
                'min:9',
                'max:9'
            ],
            'director' => [
                'required',
                'array',
            ],
            'director.email' => [
                'required',
                'email',
                Rule::unique('users', 'email')
                    ->ignore($this->model?->director_id)
            ],
            'director.password' => [
                Rule::requiredIf(!$this->model->exists),
                'string',
                'min:6',
                'nullable'
            ],

        ];
    }

    protected function passedValidation(): void
    {
        parent::passedValidation();

        if ($this->director['password']) {
            $this->validatedData['director']['password'] = Hash::make($this->password);
        }

        $this->validatedData['director']['type'] = UserTypeEnum::COMPANY->value;
    }
}
