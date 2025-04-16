<?php

use Illuminate\Support\Facades\Route;
use Http\Admin\Employee\Controllers\EmployeeController;

Route::prefix('employee')
    ->group(function(){
        Route::apiResource('employees', EmployeeController::class)->only(['index', 'show']);
    });
