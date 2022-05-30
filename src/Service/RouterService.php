<?php
namespace LH\Api\Service;

use LH\Api\Service\Service;
use LH\Api\Router;

class RouterService extends Service
{
    /**
     * @var $service */
    public ?Router $service = NULL;

    public function __construct()
    {
        $this->service = new Router();
        return $this->service;
    }

    /**
     * Get the underlying service.
     *
     * @return Object
     */
    public function get() : Object
    {
        return $this->service;
    }
}

