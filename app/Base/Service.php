<?php

namespace App\Base;

use App\Base\Model\Model;

class Service
{
    public function __construct(protected Model $model)
    {
    }
}
