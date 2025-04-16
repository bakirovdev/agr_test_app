<?php

namespace Http\Admin\Company\Controllers;

use Modules\User\Models\User;
use Modules\Company\Models\Company;
use App\Http\Controllers\Controller;
use Modules\Company\Search\CompanySearch;
use Modules\Company\Resources\CompanyResource;
use Symfony\Component\HttpFoundation\Response;
use Http\Admin\Company\Requests\CompanyRequest;
use Illuminate\Contracts\Validation\ValidatesWhenResolved;

class CompanyController extends Controller
{
    public function __construct(){
        parent::__construct(
            model: new Company(),
            search: new CompanySearch(),
            requestClass: CompanyRequest::class,
            resourceClass: CompanyResource::class
        );
    }

    public function store(ValidatesWhenResolved $request): Response
    {
        $request->model->getService()->storeCompany($request);

        $data = $this->resourceClass::make($request->model);

        return response()->json($data, 201);
    }

    public function update(ValidatesWhenResolved $request): Response
    {

        $request->model->getService()->updateCompany($request);

        $data = $this->resourceClass::make($request->model);

        return response()->json($data, 201);
    }
}
