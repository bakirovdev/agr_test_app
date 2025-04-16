<?php

namespace Modules\User\Search;

use App\Base\Search;
use App\Search\Enums\SearchFilterConditionEnum;
use App\Search\Enums\SearchFilterTypeEnum;

class UserSearch extends Search
{
    public array $filters = [
        'email' => SearchFilterTypeEnum::LIKE,
        'username' => SearchFilterTypeEnum::LIKE,
        'search' => [
            'condition' => SearchFilterConditionEnum::OR_WHERE,
            'filters' => [
                'email' => SearchFilterTypeEnum::LIKE,
                'email' => SearchFilterTypeEnum::LIKE,
            ]
        ]
    ];
}
