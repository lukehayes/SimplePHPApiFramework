<?php
namespace LH\Api\DB;

use LH\Api\DB\Database;

class Query
{
    private $db = NULL;

    public function __construct()
    {
        $this->db = (new Database())->getConnection();
    }

    /**
     * Simple, raw select * statement.
     *
     * @param string $table
     *
     * @return PDOStatement
     */
    public function selectAll(string $table) : \PDOStatement
    {
        return $this->db->query("select * from $table");
    }
}
