<?php
namespace LH\Api\Service;

/**
 * Base class that all services should inherit.
 */
abstract class Service
{
    /**
     * Get the underlying service.
     */
    abstract public function get() : Object;
}
