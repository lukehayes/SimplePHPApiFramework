<?php
namespace LH\Api\DB;

use PDO;

/**
 * Simple PDO Connection to an Sqlite database.
 */
class PDOConnection
{
    private ?PDO $conn = NULL;

    public function __construct()
    {
        $this->conn = new PDO("sqlite:db");
        $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); 
    }

    /**
     * PDO Connection getter.
     */
    public function getConnection() : PDO
    {
        return $this->conn;
    }
}

