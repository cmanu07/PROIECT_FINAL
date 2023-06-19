<?php

class ConnModel 
{
    protected $conn;

    public function dbConn() {        
        $this->conn = new mysqli('localhost', '', '', 'webdev');
        if($this->conn->connect_error) echo 'Eroare' . $this->conn->connect_error;
        return $this->conn;
    }
}