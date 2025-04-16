<?php

namespace Http\Company\Employee\Tests\Employee;

use Modules\Employee\Search\EmployeeSearch;
use App\Testing\Feature\Traits\SearchFeatureTestTrait;

class IndexTest extends _TestCase
{
    use SearchFeatureTestTrait;

    public string $searchClass = EmployeeSearch::class;

    public function test_filters(): void
    {
        $this->sendRequestWithFilters([
            'name' => 'com',
            'address' => 'test',
            'director_id' => 1,
            'website' => 'test',
            'search' => 'company',
        ]);
    }
}
