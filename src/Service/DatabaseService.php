<?php
namespace LH\Api\Service;

use LH\Api\Service\Service;
use LH\Api\DB\Database;

class DatabaseService extends Service
{
    private $service = NULL;

    public function __construct()
    {
        $this->service = (new Database())->getConnection();
        dump($this);
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

