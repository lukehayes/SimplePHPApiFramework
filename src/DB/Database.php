<?php
namespace LH\Api\DB;

use LH\Api\DB\Connection;

/**
 * Layer to interact with the database.
 */
class Database
{
    public Connection $connection;

    public function __construct()
    {
        $db = new Connection();
        $this->connection = $db->getConnection();
        //dump($this->connection);
    }
}
