<?php


namespace Aron\Warehouse\Service;


class WarehouseService
{
    /**
     * @var array 配置信息
     */
    protected array $configInfo;

    public function __construct()
    {
        $this->configInfo = config('warehouse');
    }

    /**
     * @Notes: 根据country信息查询对应所属仓库
     *
     * @param string|int $country
     * @return string
     * @author: aron
     * @Date: 2020-09-22
     * @Time: 12:34
     */
    public function getWarehouseByCountry($country): string
    {
        $config = $this->configInfo;
        $return = $config['defaultWarehouse'];
        $related = $config["related"];
        $country = is_string($country) ? strtoupper($country) : $country;
        foreach ($related as $key => $value) {
            $search = array_filter($value, function ($val) use ($country) {
                if (in_array($country, $val)) {
                    return true;
                }
                return false;
            });
            if (!empty($search)) {
                $return = $key;
            }
        }
        return $return;
    }

}
