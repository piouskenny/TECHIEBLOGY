<?php

require_once  __DIR__. '/../config/db_properties.php';

class DB_interaction {
    private $conn;

    public function __construct() {
        $host = HOST_NAME;
        $user = DB_USERNAME;
        $pass = DB_PASSWORD;
        $db = DB_NAME;

        $this->conn = new mysqli($host, $user, $pass, $db);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

 

    public function base_query ($sql) {
        $result = $this->conn->query($sql);

        if(!$result) {
            die("Query failed: " . $this->conn->error);
        } else {
            return $result;
        }
    }
}
