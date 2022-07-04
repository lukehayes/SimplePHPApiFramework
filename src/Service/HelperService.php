<?php
namespace LH\Api\Service;

use LH\Api\Helpers;

class HelperService extends Service
{
    private $service = NULL;

    public function __construct()
    {
        $this->service = new Helpers();
    }

    /**
     * Get the underlying service.
     *
     * @return Object
     */
    public function get() : Helpers
    {
        return $this->service;
    }
}

