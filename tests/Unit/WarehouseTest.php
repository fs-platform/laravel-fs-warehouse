<?php

namespace Tests\Unit;

use Aron\Warehouse\Service\WarehouseService;
use Tests\TestCase;
use Tests\CreatesApplication;

class WarehouseTest extends TestCase
{
    use CreatesApplication;

    public function testGetWarehouseByCountry()
    {
        $config = config('warehouse')['related'];
        $warehouse = new WarehouseService();
        $us_code = $config['US']['code'];
        $us_number = $config['US']['id'];
        $au_number = $config['AU']['id'];
        ;
        $au_code = $config['AU']['code'];
        $de_code = $config['DE']['code'];
        $de_number = $config['DE']['id'];
        $sg_number = $config['SG']['id'];
        $sg_code = $config['SG']['code'];
        array_walk($us_code, function ($val) use ($warehouse) {
            $this->assertEquals('US', $warehouse->getWarehouseByCountry($val));
        });
        array_walk($us_number, function ($val) use ($warehouse) {
            $this->assertEquals('US', $warehouse->getWarehouseByCountry($val));
        });
        array_walk($au_code, function ($val) use ($warehouse) {
            $this->assertEquals('AU', $warehouse->getWarehouseByCountry($val));
        });
        array_walk($au_number, function ($val) use ($warehouse) {
            $this->assertEquals('AU', $warehouse->getWarehouseByCountry($val));
        });
        array_walk($de_code, function ($val) use ($warehouse) {
            $this->assertEquals('DE', $warehouse->getWarehouseByCountry($val));
        });
        array_walk($de_number, function ($val) use ($warehouse) {
            $this->assertEquals('DE', $warehouse->getWarehouseByCountry($val));
        });
        array_walk($sg_number, function ($val) use ($warehouse) {
            $this->assertEquals('SG', $warehouse->getWarehouseByCountry($val));
        });
        array_walk($sg_code, function ($val) use ($warehouse) {
            $this->assertEquals('SG', $warehouse->getWarehouseByCountry($val));
        });
    }
}
