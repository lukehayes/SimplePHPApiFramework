<?php
namespace LH\Api;

class Router
{
    private $request_path = NULL;

    public function __construct()
    {
        $this->request_path = $_SERVER['REQUEST_URI'];
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
