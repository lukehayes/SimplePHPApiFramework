<?php
namespace LH\Api\Service;

/**
 * Base class that all services should inherit.
 */
abstract class Service
{
    public function __construct()
    {
    }

    /**
     * Get the underlying service.
     */
    abstract public function get() : Object;
}
