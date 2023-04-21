<?php

class ConnModel 
{
    protected $conn;

    public function dbConn() {        
        $this->conn = new mysqli('localhost', 'myUser', 'ManuC531?.,', 'webdev');
        if($this->conn->connect_error) echo 'Eroare' . $this->conn->connect_error;
        return $this->conn;
    }
}