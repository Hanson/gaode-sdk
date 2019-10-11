<?php


namespace Hanson\Gaode;


use Hanson\Foundation\Http;

class Api
{

    /**
     * @var Http
     */
    private $http;

    /**
     * @var string
     */
    private $key;

    public function __construct(string $key)
    {
        $this->key = $key;
    }

    public function request($url, $params)
    {
        $params = array_merge($params, ['key' => $this->key]);

        $response = $this->getHttp()->get($url, $params);

        return json_decode(strval($response->getBody()), true);
    }

    private function getHttp()
    {
        return $this->http ?: $this->http = new Http();
    }
}