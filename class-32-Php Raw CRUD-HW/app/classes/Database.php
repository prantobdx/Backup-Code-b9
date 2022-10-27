<?php


namespace App\classes;


class Database
{
    public $user;
    public $hostName;
    public $password;
    public $databaseName;
    public $dbconn;

    public function __construct()
    {
        $this->hostName = 'localhost';
        $this->user = 'root';
        $this->password = '';
        $this->databaseName = 'class_32';
    }

    public function dbConnect()
    {
        $this->dbconn=mysqli_connect($this->hostName,$this->user,$this->password,$this->databaseName);
        return $this->dbconn;
    }

}

