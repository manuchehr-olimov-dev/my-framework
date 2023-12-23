<?php
namespace Framework\Database;

use PDO;

abstract class Model
{
    protected $db_type  = DB_TYPE;
    protected $host     = DB_HOST;
    protected $dbname   = DB_NAME;
    protected $user     = DB_USER;
    protected $password = DB_PASSWORD;
    public $query_params = [
        "table"     => "",
        "where"     => [],
        "columns"   => [],
        "limit"     => 0
    ];
    protected $query    = "";
    public function connect()
    {
        $dsn = "{$this->db_type}:host={$this->host};dbname={$this->dbname}";
        $db = new PDO($dsn, $this->user, $this->password);
        return $db;
    }

    protected function disconnect($db)
    {
        $db = null;
        return $this;
    }

    public function select(array $cols = [])
    {
        array_push($this->query_params["columns"], $cols);
        return $this;
    }
    public function get()
    {
        
    }

}


?>