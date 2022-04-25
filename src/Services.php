<?php

use LH\Api\App;
use LH\Api\Service\RouterService;

/**
 * Add all of the services to the container here.
 */
return function(App $app)
{
    $app->getContainer()
        ->addService('router', new RouterService);
};


