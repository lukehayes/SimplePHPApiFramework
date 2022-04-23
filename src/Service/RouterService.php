<?php
namespace LH\Api\Service;

use LH\Api\Service\Service;
use LH\Api\Router;

class RouterService extends Service
{
    public ?Router $router = NULL;

    public function __construct()
    {
        $this->router = new Router();
    }

    public function get() : Object
    {
        return $this->router;
    }
}

