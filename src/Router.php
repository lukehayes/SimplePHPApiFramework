<?php
namespace LH\Api;

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
   private function dispatchRoute() : void
    {
        switch($this->request_path)
        {
            case "/":
                echo "Home";
                break;
            default:
                echo "Page Not Found";
                break;
        }
    }

    /**
     * Start the router.
     */
    public function run()
    {
        $this->dispatchRoute();
    }
}
