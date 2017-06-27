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
     * @var AccessToken
     */
    private $accessToken;

    public function __construct(AccessToken $accessToken)
    {
        $this->accessToken = $accessToken;
    }

    public function request($url, $params)
    {
        $params = array_merge($params, ['key' => $this->accessToken->getKey()]);

        $response = $this->getHttp()->get($url, $params);

        return json_decode(strval($response->getBody()), true);
    }

    private function getHttp()
    {
        return $this->http ?: $this->http = new Http();
    }
}