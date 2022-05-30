<?php

use LH\Api\App;
use LH\Api\Service\RouterService;
use LH\Api\Service\TwigService;

/**
 * Add all of the services to the container here.
 */
return function(App $app)
{
    /**
     * Routing for the application 
     */
    $app->getContainer()
        ->addService('router', new RouterService);

    /**
     * Twig templates.
     */
    $app->getContainer()
        ->addService('twig', new TwigService);
};


