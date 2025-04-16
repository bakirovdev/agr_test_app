<?php

namespace Modules\Employee\Models;

use App\Base\Model\Model;
use Modules\Company\Models\Company;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Employee\Observers\EmployeeObserver;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model 
{
    use SoftDeletes;
    
    protected static function booted()
    {
        self::observe([
            EmployeeObserver::class
        ]);
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'director_id');
    }

}
