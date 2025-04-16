<?php

namespace Modules\Company\Search;

use App\Base\Search;
use App\Search\Enums\SearchFilterTypeEnum;
use App\Search\Enums\SearchFilterConditionEnum;

class CompanySearch extends Search
{
    public array $relations = [
        'director',
        'employees'
    ];

    public array $filters = [
        'name' => SearchFilterTypeEnum::LIKE,
        'address' => SearchFilterTypeEnum::LIKE,
        'director_id' => SearchFilterTypeEnum::EQUAL_RAW,
        'website' => SearchFilterTypeEnum::LIKE,
        'search' => [
            'condition' => SearchFilterConditionEnum::OR_WHERE,
            'filters' => [
                'name' => SearchFilterTypeEnum::LIKE,
                'address' => SearchFilterTypeEnum::LIKE,
                'website' => SearchFilterTypeEnum::LIKE,
            ]
        ]
    ];
}
