<?php

namespace Modules\User\Models;

use App\Base\Model\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Auth\Authenticatable;
use Modules\User\Services\UserService;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Modules\Company\Models\Company;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, HasApiTokens;

    use SoftDeletes;

    protected $hidden = [
        'password',
    ];

    public string $newToken;


    public function getService(): UserService
    {
        return new UserService($this);
    }

    public function company(): HasOne
    {
        return $this->hasOne(Company::class, 'director_id');
    }

}
