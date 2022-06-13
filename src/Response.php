<?php
namespace LH\Api;

/**
 * Wrapper for a HTTP Response
 */
class Response
{
    /**
     * Show the response to the user.
     */
    public function send()
    {
        dump("Sending");
    }
}

