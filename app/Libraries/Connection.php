<?php

class Connection {

    private $host = 'localhost';
    private $dbname = 'projeto_mvc';
    private $dbuser = 'root';
    private $port = '3306';
    private $password = '';
    private $dbh;

    public function __construct() {

        $dns = 'mysql:host='.$this->host.';port='.$this->port.';dbname='.$this->dbname;
        $options=  [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {

            $this->dbh = new PDO($dns, $this->dbuser, $this->password, $options);
            
        } catch(PDOException $e) {
        
            echo "Error: ".$e->getMessage();
            exit;
            }
        }
    }

