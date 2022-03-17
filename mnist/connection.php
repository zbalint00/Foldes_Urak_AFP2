<?php
Class dbObj{

    var $servername = "localhost";
    var $username = "root";
    var $pw = "";
    var $dbname = "mnist";
    var $conn;

    function getConnection(){
        $connection = mysqli_connect($this->servername, $this->username, $this->pw, $this->dbname) or die("Connection failed". mysqli_connect_error());

        if(mysqli_connect_errno()){
            printf("Connection failed");
            exit();
        } else{
            $this->conn = $connection;
        }

        return $this->conn;
    }
}



