<?php

namespace Http\Admin\Employee\Controllers;

use App\Http\Controllers\Controller;
use Modules\Employee\Models\Employee;
use Modules\Employee\Resources\EmployeeResource;
use Modules\Employee\Search\EmployeeSearch;

class EmployeeController extends Controller
{
    public function __construct(){
        parent::__construct(
            model: new Employee(),
            search: new EmployeeSearch(),
            resourceClass: EmployeeResource::class
        );
    }
}
