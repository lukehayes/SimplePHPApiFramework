<?php
namespace LH\Api\DB;

use PDO;

/**
 * Simple PDO Connection to an Sqlite database.
 */
class Connection
{
    private ?PDO $conn = NULL;

    public function __construct()
    {
        $this->conn = new PDO("sqlite:db");
    }

    /**
     * PDO Connection getter.
     */
    public function getConnection() : PDO
    {
        return $this->conn;
    }
}

