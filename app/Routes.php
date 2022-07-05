<?php

use LH\Api\App;
use LH\Api\Route;

/**
 * Add all of the services to the container here.
 */
return function(App $app)
{
    $home = new Route("/", function($app)
    {
        echo $app->twig->render('main/base.php', []);
    });

    $posts = new Route("/posts", function($app)
    {
        $q = $app->query;
        echo $app->twig->render('posts/index.php', ['data' => $q->selectAll('posts') ]);
    });

    $loginForm = new Route("/login", function($app)
    {
        $q = $app->query;
        echo $app->twig->render('login/form.php', []);
    });

    $app->router->addRoute($home);
    $app->router->addRoute($posts);
    $app->router->addRoute($loginForm);
};

