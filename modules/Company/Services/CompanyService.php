<?php

namespace Modules\Company\Services;

use App\Base\Service;
use Modules\User\Models\User;

/**
 * @property Company $model
 */

class CompanyService extends Service {

    public function storeCompany($request): void
    {
        $data = $request->validatedData;

        $this->model->safelyDBProcess(function () use ($data) {
            $director = User::query()->create($data['director']);

            $this->model->fill([
                ...$data,
                'director_id' => $director->id
            ])
            ->setRelation('director', $director);

            $this->model->save();
        });
    }

    public function updateCompany($request): void
    {
        $request->model->safelyDBProcess(function () use ($request) {
            $data = $request->validatedData;
            $director = $request->model->director();
            $director->update($data['director']);

            $request->model->fill([
                ...$data,
            ])
            ->load('director');

            $request->model->save();

        });
    }
}
