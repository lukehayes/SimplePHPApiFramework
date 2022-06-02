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

    public function __invoke()
    {
        return $this->connection->getConnection();
    }


    /**
     * Create a test table and fill it with data. Will be removed.
     */
    public function buildTestDB()
    {
        //$this()->query("create table test(id integer)");

        for($i = 0; $i <= 10; $i++)
        {
            $r = rand(100,1000);
            $this()->query("insert into test(id) values($r)");
        }
    }

}
