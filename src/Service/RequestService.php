<?php
namespace LH\Api\Service;

use LH\Api\Service\Service;
use LH\Api\Request;

class RequestService extends Service
{
    private $service = NULL;

    public function __construct()
    {
        $this->service = new Request();
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

