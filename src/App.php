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

    /**
     * Start the application.
     */
    public function run() : void
    {
        $this->router->run();
    }

    /**
     * Magic method is iplemented to make the 'api' a little cleaner.
     */
    public function __get($name)
    {
        $service = $this->container->getService($name);
        return $service->get();
    }
}

