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

    /**
     * @Notes: 判断是否为欧盟国家
     *
     * @param $country
     * @param string $postCode
     * @return bool
     * @author: Aron
     * @Date: 2021/4/16
     * @Time: 11:59 上午
     */
    public function isEuUnionCountry($country, $postCode = ''): bool
    {
        $config = $this->configInfo;
        $related = $config["EuUnion"];
        $northernIrelandRelatedPost = $config['northernIrelandRelatedPost'];
        if (in_array($country, $related['id']) || in_array($country, $related['code'])) {
            return true;
        }
        $postCode = substr($postCode, 0, -2);
        $postCode = str_replace(' ', '', $postCode);
        //英国地区 邮编为北爱尔兰也属于欧盟
        if (in_array($country, [222, 'GB']) && in_array($postCode, $northernIrelandRelatedPost)) {
            return true;
        }
        return false;
    }

    /**
     * @Notes: 根据仓库Id获取仓库code
     *
     * @param int $warehouseId
     * @return string
     * @author: Aron
     * @Date: 2021/6/7
     * @Time: 3:12 下午
     */
    public function getWarehouseValue(int $warehouseId): string
    {
        return $this->configInfo["warehouse"][$warehouseId] ?? '';
    }

    /**
     * @Notes: 根据仓库code获取仓库Id
     *
     * @param string $warehouse
     * @return int
     * @auther: Dylan
     * @Date: 2021/6/4
     * @Time: 11:58
     */
    public function getWarehouseKey(string $warehouse): int
    {
        return array_search($warehouse, $this->configInfo["warehouse"]) ?? 0;
    }
}
