<?php


namespace Hanson\Gaode;


use Hanson\Foundation\Foundation;

/**
 * Class Gaode
 * @package Hanson\Gaode
 *
 * @property \Hanson\Gaode\Api  $api
 */
class Gaode extends Foundation
{

    const API = 'http://restapi.amap.com/v3/';

    protected $providers = [
        ServiceProvider::class
    ];

    public function geo(array $params)
    {
        return $this->api->request(self::API . 'geocode/geo', $params);
    }

    public function regeo(array $params)
    {
        return $this->api->request(self::API . 'geocode/regeo', $params);
    }

    /**
     * 步行路径规划
     *
     * @param array $params
     * @return mixed
     */
    public function directionWalking(array $params)
    {
        return $this->api->request(self::API . 'direction/walking', $params);
    }

    /**
     * 公交车路径规划
     * 
     * @param array $params
     * @return mixed
     */
    public function directionTransit(array $params)
    {
        return $this->api->request(self::API . 'direction/transit/integrated', $params);
    }

    /**
     * 驾车路径规划
     * 
     * @param array $params
     * @return mixed
     */
    public function directionDriving(array $params)
    {
        return $this->api->request(self::API . 'direction/driving', $params);
    }

    /**
     * 距离测量
     *
     * @param array $params
     * @return mixed
     */
    public function distance(array $params)
    {
        return $this->api->request(self::API . 'distance', $params);
    }

    /**
     * 地址输入提示
     *
     * @param array $params
     * @return mixed
     */
    public function inputTips(array $params)
    {
        return $this->api->request(self::API . 'assistant/inputtips', $params);
    }

}
