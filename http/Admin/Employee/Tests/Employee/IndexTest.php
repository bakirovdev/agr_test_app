<?php

namespace Http\Admin\Employee\Tests\Employee;

use Modules\Employee\Search\EmployeeSearch;
use App\Testing\Feature\Traits\SearchFeatureTestTrait;

class IndexTest extends _TestCase
{
    use SearchFeatureTestTrait;

    public string $searchClass = EmployeeSearch::class;

    public function test_filters(): void
    {
        $this->sendRequestWithFilters([
            'search' => 'company',
        ]);
    }
}
