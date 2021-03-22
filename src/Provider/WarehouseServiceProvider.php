<?php

namespace Aron\Warehouse\Provider;

use Aron\Warehouse\Service\WarehouseService;
use Illuminate\Support\ServiceProvider;

class WarehouseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Warehouse', WarehouseService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // 发布配置文件
        $this->publishes([
            __DIR__ . '/../../config/warehouse.php' => config_path('warehouse.php'),
        ]);
    }
}
