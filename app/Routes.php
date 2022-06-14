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
        echo $app->twig->render('base.php', []);
    });

    $route2 = new Route("/hello", function()
    {
        dump("Route Object Called from /hello path");
    });

    $posts = new Route("/posts", function($app)
    {
        $q = $app->query;
        echo $app->twig->render('posts/index.php', ['data' => $q->selectAll('posts') ]);

    });

    $app->router->addRoute("/", $route1);
    $app->router->addRoute("/hello",$route2);
    $app->router->addRoute("/posts",$posts);
};

