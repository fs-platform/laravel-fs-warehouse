<?php

namespace Aron\Signature\Facades;

use Illuminate\Support\Facades\Facade;

class Warehouse extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'Warehouse';
    }
}
