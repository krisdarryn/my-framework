<?php

namespace Blogs\DB;

use PDO;

class Database {

    private static $instance = null;

    public $connection;

    private function __construct() {    
        
        $dsn = 'mysql:dbname=blogs;host=db-service';
        $user = 'root';
        $password = 'rootpassword';

        try {
            $this->connection = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            exit;
        }

    }

    public static function getInstance() {

        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

}