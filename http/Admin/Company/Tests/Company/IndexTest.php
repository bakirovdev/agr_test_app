<?php

namespace Http\Admin\Company\Tests\Company;

use Modules\Company\Search\CompanySearch;
use App\Testing\Feature\Traits\SearchFeatureTestTrait;

class IndexTest extends _TestCase
{
    use SearchFeatureTestTrait;

    public string $searchClass = CompanySearch::class;

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
