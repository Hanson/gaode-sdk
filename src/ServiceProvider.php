<?php


namespace Hanson\Gaode;


use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{

    /**
     * Registers services on the given container.
     *
     * This method should only be used to configure services and parameters.
     * It should not get services.
     *
     * @param Container $pimple A container instance
     */
    public function register(Container $pimple)
    {
        $pimple['access_token'] = function($pimple) {
            return new AccessToken($pimple['config']['key'], $pimple['config']->get('sig'));
        };

        $pimple['api'] = function($pimple) {
            return new Api($pimple['access_token']);
        };
    }
}