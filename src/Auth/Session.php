<?php
namespace LH\Api\Auth;

/**
 * Wrapper for session functionality.
 */
class Session
{
	public function __construct()
	{
		dump("Session Object Created");
	}

	/**
	 * Start a session.
	 *
	 * @return void
	 */
	public function start() : void
	{
		session_start();
	}

	/**
	 * Remove all of the variables inside a session.
	 *
	 * @return void
	 */
	public function kill() : void
	{
		session_unset();
	}

	/**
	 * Destroy the entire session.
	 *
	 * @return void
	 */
	public function destroy() : void
	{
		session_destroy();
	}
}
