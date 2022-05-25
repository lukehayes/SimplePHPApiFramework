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
        // TODO Implmenent properly.
        dump(array_key_exists($this->request_path, $this->routes));

        if(array_key_exists($this->request_path, $this->routes))
        {
            $route = $this->routes[$this->request_path];
            dump($route);
            dump($route->callback());
        }


        //switch($this->request_path)
        //{
            //case "/":
                //echo "Home";
                //break;
            //default:
                //echo "Page Not Found";
                //break;
        //}
    }

    /**
     * Start the router.
     */
    public function run()
    {
        $this->dispatchRoute();
    }
}
