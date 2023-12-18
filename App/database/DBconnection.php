<?php

namespace App\database;

use Exception;
use PDO;

class DBconnection
{
    protected $config;
    public function __construct()
    {
        $this->setConfig();
        return $this->PDOconnection();
    }
    public function setConfig()
    {
        if (isset($_SERVER['REQUEST_URI']))
            $this->config = include './config/database.php';
    }
    public function getConfig($config)
    {
        return $this->config[$config];
    }
    public function PDOconnection()
    {
        $dsn = "mysql:host=".$this->config['HOST'].";dbname=".$this->config['DB_NAME'].";charset=UTF8";
        try{
            $pdo = new PDO($dsn,$this->config['DB_USER'], $this->config['DB_PASS']);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }catch(Exception $e){
            echo($e->getMessage());
        }
    }
}
