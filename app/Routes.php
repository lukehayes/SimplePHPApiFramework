<?php

use LH\Api\App;
use LH\Api\Route;

/**
 * Add all of the services to the container here.
 */
return function(App $app)
{
    $route1 = new Route("/", function()
    {
        dump("Route Object Called");
    });

    $route2 = new Route("/hello", function()
    {
        dump("Route Object Called");
    });

    $router = $app->router();
    $router->addRoute("/", $route1);
    $router->addRoute("/hello",$route2);
};

