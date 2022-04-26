<?php

use LH\Api\App;

use LH\Api\Route;

/**
 * Add all of the services to the container here.
 */
return function(App $app)
{
    $route = new Route("/", function()
    {
        dump("Route Object Called");
    });

    $router = $app->router();
    $router->addRoute($route);
};

