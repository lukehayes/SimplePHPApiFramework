<?php
namespace LH\Api;

use LH\Api\Service\Service;

// Todo Add PSR-7 compliance...

/**
 * A very simple/basic service container
 */
class Container
{
    /**
     * @var array $sevices
     */
    private $services = [];

    public function __construct()
    {
    }

    /**
     * Add a service to the container.
     *
     * @param string $name        The name to give to the service for reference.
     * @param Service $service    The service object to add.
     *
     * @return void
     */
    public function addService(string $name, Service $service)
    {
        $this->services[$name] = $service;
    }

    /**
     * Get a specific service from the container.
     *
     * @param string $name The name of the service to retrieve from the container.
     *
     * @return mixed
     */
    public function getService(string $name) : mixed
    {
        if(array_key_exists($name, $this->services))
        {
            return $this->services[$name];
        }else
        {
            return false;
        }
    }

    public function getServices() : array
    {
        return $this->services;
    }

}
