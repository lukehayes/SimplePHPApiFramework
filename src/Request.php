<?php
namespace LH\Api;

/**
 * Wrapper for a request inside the application.
 */
class Request
{
    /**
     * @var GET|POST etc **/
    private $method = NULL;

    public function __construct()
    {
        $this->method = $_SERVER['REQUEST_METHOD'];
    }

    /**
     * Request method getter.
     *
     * @return string
     */
    public function getMethod() : string
    {
        return $this->method;
    }
}
