## warehouse

-  根据国家id 和国家code 获取对应仓库所属
- 本拓展满足psr2,psr4 规范
- 已通过单元测试

## 基本使用
1. 安装
```bash
$ composer require aron/laravel-fs-warehouse
```

2. 发布config 文件
```bash
$ php artisan vendor:publish --provider="Aron\Warehouse\Provider\WarehouseServiceProvider"
```

4. 开始使用
```php
 \Warehouse::getWarehouseByCountry(country_id|country_code);
```
