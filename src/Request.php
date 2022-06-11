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

    /**
     * Is the request a GET?
     *
     * @return bool.
     **/
    public function isGet() : bool
    {
       return $this->method == "GET" ?? false;
    }

    /**
     * Is the request a POST?
     *
     * @return bool.
     **/
    public function isPost() : bool
    {
       return $this->method == "POST" ?? false;
    }
}
