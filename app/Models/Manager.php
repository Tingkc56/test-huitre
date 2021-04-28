<?php

namespace Project\Models;
use Exception;

// main manager for connecting the database
class Manager{
    protected function bdConnect()
    {

        $db_host = $_ENV['host'];
        $db_name = $_ENV['database'];
        $db_user = $_ENV['username'];
        $db_pass = $_ENV['password'];
        $db_port = $_ENV['port'];

        try{
            $bdd = new \PDO("mysql:host=$db_host:$db_port;dbname=$db_name;charset=utf8", $db_user, $db_pass);
            return $bdd;
        }catch(Exception $e){
            die('Erreur : '. $e->getMessage());
        }

    }
}
