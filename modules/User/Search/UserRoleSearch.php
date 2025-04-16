<?php

namespace Modules\User\Search;

use App\Base\Search;
use App\Search\Enums\SearchFilterTypeEnum;

class UserRoleSearch extends Search
{
    public array $filters = [
        'name' => SearchFilterTypeEnum::LIKE,
    ];
}
