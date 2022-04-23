<?php
namespace LH\Api\Service;

use LH\Api\Service\Service;
use LH\Api\Router;

class RouterService extends Service
{
    /**
     * @var $router */
    public ?Router $router = NULL;

    public function __construct()
    {
        $this->router = new Router();
        return $this->router;
    }

    /**
     * Get the underlying service.
     *
     * @return Object
     */
    public function get() : Object
    {
        return $this->router;
    }
}

