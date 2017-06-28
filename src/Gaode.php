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

    const GEO_CODE_URI = 'http://restapi.amap.com/v3/geocode/geo';
    const GEO_DECODE_URI = 'http://restapi.amap.com/v3/geocode/regeo';
    const DIRECTION_WALKING_URI = 'http://restapi.amap.com/v3/direction/walking';
    const DIRECTION_TRANSIT_URI = 'http://restapi.amap.com/v3/direction/transit/integrated';
    const DIRECTION_DRIVING_URI = 'http://restapi.amap.com/v3/direction/driving';
    const DISTANCE_URI = 'http://restapi.amap.com/v3/distance';


    protected $providers = [
        ServiceProvider::class
    ];

    public function geo(array $params)
    {
        return $this->api->request(self::GEO_CODE_URI, $params);
    }

    public function regeo(array $params)
    {
        return $this->api->request(self::GEO_DECODE_URI, $params);
    }

    /**
     * 步行路径规划
     *
     * @param array $params
     * @return mixed
     */
    public function directionWalking(array $params)
    {
        return $this->api->request(self::DIRECTION_WALKING_URI, $params);
    }

    /**
     * 公交车路径规划
     * 
     * @param array $params
     * @return mixed
     */
    public function directionTransit(array $params)
    {
        return $this->api->request(self::DIRECTION_TRANSIT_URI, $params);
    }

    /**
     * 驾车路径规划
     * 
     * @param array $params
     * @return mixed
     */
    public function directionDriving(array $params)
    {
        return $this->api->request(self::DIRECTION_DRIVING_URI, $params);
    }

    /**
     * 距离测量
     *
     * @param array $params
     * @return mixed
     */
    public function distance(array $params)
    {
        return $this->api->request(self::DISTANCE_URI, $params);
    }

//    public function ()
//    {
//
//    }

}