<?php

namespace Http\Company\Employee\Filters;

use App\Base\Filter;
use App\Base\QueryBuilder;

class EmployeeFilter extends Filter
{
    public function process(QueryBuilder $query): QueryBuilder
    {
        return $query->where('company_id', request()->user()->company->id);
    }
}
