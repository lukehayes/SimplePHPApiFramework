<?php
namespace LH\Api;

use LH\Api\Service\Service;
use LH\Api\Service\ServiceNotFoundException;
use Psr\Container\ContainerInterface;
use Psr\Container\NotFoundExceptionInterface;

/**
 * A very simple/basic service container
 */
class Container implements ContainerInterface
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

    /**
     * ---------------------------------------------------------------------
     * PSR CONTAINER
     * ---------------------------------------------------------------------
     */
    /**
     * Finds an entry of the container by its identifier and returns it.
     *
     * @param string $id Identifier of the entry to look for.
     *
     * @throws NotFoundExceptionInterface  No entry was found for **this** identifier.
     * @throws ContainerExceptionInterface Error while retrieving the entry.
     *
     * @return mixed Entry.
     */
    public function get(string $id)
    {
        if(array_key_exists($id, $this->services))
        {
            return $this->services[$id];
        }else
        {
            throw new ServiceNotFoundException("Service: [$id] could not be found.");
        }
    }

    /**
     * Returns true if the container can return an entry for the given identifier.
     * Returns false otherwise.
     *
     * `has($id)` returning true does not mean that `get($id)` will not throw an exception.
     * It does however mean that `get($id)` will not throw a `NotFoundExceptionInterface`.
     *
     * @param string $id Identifier of the entry to look for.
     *
     * @return bool
     */
    public function has(string $id): bool
    {
        // TODO Implement
    }

}
