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
        // Pass an instance of $this so the router has access to it
        // and it can be accessed in the callbacks.
        $this->router->run($this);
    }

    /**
     * Magic method is implemented to allow acess to the
     * underlying services inside the container.
     */
    public function __get($name)
    {
        $service = $this->container->getService($name);
        return $service->get();
    }
}

