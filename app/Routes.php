<?php

use LH\Api\App;
use LH\Api\Route;

/**
 * Add all of the services to the container here.
 */
return function(App $app)
{
    $route1 = new Route("/", function($app)
    {
        echo $app->twig->render('index.php', []);

    });

    $route2 = new Route("/hello", function()
    {
        dump("Route Object Called from /hello path");
    });

    $app->router->addRoute("/", $route1);
    $app->router->addRoute("/hello",$route2);
};

