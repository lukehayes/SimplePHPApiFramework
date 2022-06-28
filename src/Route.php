<?php
namespace LH\Api;

/**
 * Class represents a route inside the application.
 */
class Route
{
    /**
     * @var string    Path the route leads. */
    private $path    = NULL;

    /**
     * @var string    The method the route applies to. */
    private $method  = NULL;

    /**
     * @var Closure */
    public $callback = NULL;

    /**
     * Constructor
     *
     * @param string  $path        Path the route leads.
     * @param Closure $callback    Callback to call for path.
     */
    public function __construct($path, $callback)
    {
        $this->path = $path;
        $this->callback = $callback;
    }

    /**
     * Path getter.
     *
     * @return string
     */
    public function getPath() : string
    {
        return $this->path;
    }

    public function setMethod(string $method) : void
    {
        $this->method = $method;
    }

    public function getMethod() : string
    {
        return $this->method;
    }
}
