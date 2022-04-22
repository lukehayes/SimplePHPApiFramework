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
        $this->service[$name] = $service;
    }

    /**
     * Get a specific service from the container.
     *
     * @param string $name The name of the service to retrieve from the container.
     *
     * @return void
     */
    public function getService(string $name) : Service
    {
        return $this->service[$name];
    }

    public function getServices() : array
    {
        return $this->services;
    }

}
