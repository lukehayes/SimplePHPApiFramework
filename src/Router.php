<?php
namespace LH\Api;

use LH\Api\Service\ServiceNotFoundException;

class Router
{
    private $request_path = NULL;

    private $routes = [];

    public function __construct()
    {
        $this->request_path = $_SERVER['REQUEST_URI'];
    }

    /**
     * Routes getter.
     *
     * @return array    List of all the currently defined routes.
     */
    public function getRoutes() : array
    {
        return $this->routes;
    }

    /**
     * Add a route to the application
     *
     * @return array    List of all the currently defined routes.
     */
    public function addRoute(String $name, Route $route) : void
    {
        $this->routes[$name] = $route;
    }

    /**
     * Try and find an availabe route to display.
     */
   private function dispatchRoute(App $app) : void
    {
        $path = trim($this->request_path, "\/");

        if(array_key_exists($path, $this->routes))
        {
            // TODO  Better solution than before but needs much work!
            $route = $this->routes[$path];
            ($route->callback)($app);
        }else
        {
            throw new ServiceNotFoundException("Route could not be found");
        }
    }

    /**
     * Start the router.
     */
    public function run(App $app)
    {
        $this->dispatchRoute($app);
    }
}
