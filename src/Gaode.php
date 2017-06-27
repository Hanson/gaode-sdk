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

}