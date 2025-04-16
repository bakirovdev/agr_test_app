<?php

namespace Modules\Employee\Search;

use App\Base\Search;
use App\Search\Enums\SearchFilterTypeEnum;
use App\Search\Enums\SearchFilterConditionEnum;

class EmployeeSearch extends Search
{
    public array $relations = [
        'company'
    ];

    public array $filters = [
        'search' => [
            'condition' => SearchFilterConditionEnum::OR_WHERE,
            'filters' => [
                'first_name' => SearchFilterTypeEnum::LIKE,
                'last_name' => SearchFilterTypeEnum::LIKE,
                'middle_name' => SearchFilterTypeEnum::LIKE,
            ]
        ]
    ];
}
