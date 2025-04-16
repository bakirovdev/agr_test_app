<?php

namespace Modules\User\Models;

use App\Base\Model\Model;
use Modules\User\Observers\UserRoleObserver;

class UserRole extends Model
{

    protected $table = 'user_roles';

    protected $casts = [
        'name' => 'array',
        'routes' => 'array'
    ];

    protected static function booted(): void
    {
        self::observe([
            UserRoleObserver::class
        ]);
    }

}
