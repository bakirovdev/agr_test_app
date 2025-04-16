<?php

use Http\Company\Employee\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;


Route::prefix('employee')
    ->group(function(){
        Route::apiResource('employees', EmployeeController::class);
    });
