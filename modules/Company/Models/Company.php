<?php

namespace Modules\Company\Models;

use App\Base\Model\Model;
use Modules\User\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Company\Observers\CompanyObserver;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Company\Services\CompanyService;
use Modules\Employee\Models\Employee;

class Company extends Model
{
    use SoftDeletes;

    protected static function booted()
    {
        self::observe([
            CompanyObserver::class
        ]);
    }

    public function getService(): CompanyService
    {
        return new CompanyService($this);
    }

    public function director(): BelongsTo
    {
        return $this->belongsTo(User::class, 'director_id');
    }

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class, 'company_id');
    }

}
