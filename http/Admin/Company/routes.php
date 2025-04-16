<?php

use Illuminate\Support\Facades\Route;
use Http\Admin\Company\Controllers\CompanyController;

Route::prefix('company')
    ->group(function(){
        Route::apiResource('companies', CompanyController::class);
    });
