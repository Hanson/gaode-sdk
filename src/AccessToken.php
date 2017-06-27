<?php


namespace Hanson\Gaode;


class AccessToken
{

    private $key;
    private $sig;

    public function __construct($key, $sig)
    {
        $this->key = $key;
        $this->sig = $sig;
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return mixed
     */
    public function getSig()
    {
        return $this->sig;
    }
}