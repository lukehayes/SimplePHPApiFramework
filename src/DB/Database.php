<?php
namespace LH\Api\DB;

use LH\Api\DB\Connection;

/**
 * Layer to interact with the database.
 */
class Database
{
    public PDOConnection $connection;

    public function __construct()
    {
        $this->connection = new PDOConnection();
    }

    /**
     * PDOConnection instance getter.
     * @return PDO
     */
    public function getConnection() : PDO
    {
        return $this->connection->getConnection();
    }
}
