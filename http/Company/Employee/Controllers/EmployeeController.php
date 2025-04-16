<?php

namespace Http\Company\Employee\Controllers;

use App\Http\Controllers\Controller;
use Http\Company\Employee\Filters\EmployeeFilter;
use Http\Company\Employee\Requests\EmployeeRequests;
use Modules\Employee\Models\Employee;
use Modules\Employee\Resources\EmployeeResource;
use Modules\Employee\Search\EmployeeSearch;

class EmployeeController extends Controller
{
    public function __construct(){
        parent::__construct(
            model: new Employee(),
            search: new EmployeeSearch(),
            filter: new EmployeeFilter(),
            requestClass: EmployeeRequests::class,
            resourceClass: EmployeeResource::class
        );
    }
}
