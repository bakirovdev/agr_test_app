<?php

namespace Modules\User\Enums;

use App\Base\EnumTrait;

enum UserTypeEnum: string
{
    use EnumTrait;

    case ADMIN = 'admin';
    case COMPANY = 'company';

    public static function labels(): array
    {
        return [
            self::ADMIN->value => __('fields.admin'),
            self::COMPANY->value => __('fields.company'),
        ];
    }

}
