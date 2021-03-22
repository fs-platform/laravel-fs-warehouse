<?php

namespace Aron\Warehouse\Facades;

use Illuminate\Support\Facades\Facade;

class Warehouse extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'Warehouse';
    }
}
