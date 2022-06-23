<?php


namespace js;
use \PDO;

class Database{

    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $dbName = 's_grigorean';

    protected $db;

    public function __construct()
    {
        $dsn = 'mysql:host'.$this->host.';dbname='.$this->dbName;
        $this->db = new PDO($dsn, $this->user, $this->pass);

        return $this->db;
    }

}