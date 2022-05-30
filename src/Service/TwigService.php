<?php
namespace LH\Api\Service;

use LH\Api\Service\Service;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class TwigService extends Service
{
    private $service = NULL;

    public function __construct()
    {
        $loader = new FilesystemLoader('templates');
        $this->service = new Environment($loader, []);
    }

    /**
     * Get the underlying service.
     *
     * @return Object
     */
    public function get() : Object
    {
        return $this->service;
    }
}

