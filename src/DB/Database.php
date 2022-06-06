<?php
namespace LH\Api\DB;

use LH\Api\DB\Connection;
use PDO;

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

    /**
     * Call the Database instance like a functor().
     *
     * @return PDO
     */
    public function __invoke() : PDO
    {
        return $this->connection->getConnection();
    }
}
