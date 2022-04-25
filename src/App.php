<?php

namespace LH\Api;

use LH\Api\Container;

class App
{
    private $container = NULL;

    public function __construct()
    {
        $this->container = new Container();
    }

    /**
     * Service container getter.
     *
     * @return LH\Api\Container
     */
    public function getContainer() : Container
    {
        return $this->container;
    }


    public function __call($name, $args)
    {
        $service = $this->container->getService($name);
        return $service->get();
    }
}

