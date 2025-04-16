<?php

namespace Http\Company\Company\Controllers;

use App\Base\BaseController;
use Http\Company\Company\Requests\CompanyRequest;
use Illuminate\Contracts\Validation\ValidatesWhenResolved;
use Modules\Company\Models\Company;
use Symfony\Component\HttpFoundation\Response;
use Modules\Company\Resources\CompanyResource;

class CompanyController extends BaseController
{
    public function getCompany(): Response
    {
        $company = Company::query()->whereHas('director', function ($query) {
            $query->where('id', request()->user()->id);
        })
        ->firstOrFail();

        $data = CompanyResource::make($company);

        return response()->json($data);
    }

    public function updateCompany(CompanyRequest $request): Response
    {

        $request->model->getService()->updateCompany($request);

        $data = CompanyResource::make($request->model);

        return response()->json($data, 201);
    }

}
