<?php

namespace LH\Api;

/**
 * Directory helpers, path constants etc
 */
class Helpers
{
    public $APP_DIR = NULL;

    public $TEMPLATES = NULL;

    public function __construct()
    {
        $this->APP_DIR = getcwd() . "/app";
        $this->TEMPLATES = getcwd() . "/app";
    }
}
