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
    $home->setMethod("GET");


    $posts = new Route("/posts", function($app)
    {
        $q = $app->query;
        echo $app->twig->render('posts/index.php', ['data' => $q->selectAll('posts') ]);
    });
    $posts->setMethod("GET");

    $loginForm = new Route("/login", function($app)
    {
        $q = $app->query;
        echo $app->twig->render('login/form.php', []);
    });
    $loginForm->setMethod("GET");

    $loginFormSubmit = new Route("/login", function($app)
    {
		// TODO Create some kind of authentication system.
		$user_logged_in = false;

		if($user_logged_in)
		{
        	echo $app->twig->render('main/base.php', []);
		}else
		{
			dump("Authentication Needed");
        	echo $app->twig->render('login/form.php', []);
		}

    });
    $loginFormSubmit->setMethod("POST");

    $app->router->addRoute($home);
    $app->router->addRoute($posts);
	$app->router->addRoute($loginForm);
    $app->router->addRoute($loginFormSubmit);
};

