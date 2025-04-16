<?php

use Illuminate\Support\Facades\Route;
use Http\Company\Company\Controllers\CompanyController;

Route::prefix('company')
    ->group(function(){
        Route::get('companies/get-company', [CompanyController::class, 'getCompany']);
        Route::put('companies/update-company', [CompanyController::class, 'updateCompany']);
    });
