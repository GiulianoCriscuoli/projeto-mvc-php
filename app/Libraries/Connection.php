<?php

class Connection {

    private $host = 'localhost';
    private $dbname = 'projeto_mvc';
    private $dbuser = 'root';
    private $port = '3306';
    private $password = '';
    private $dbh;
    private $stmt;

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

        public function query($sql) {
            $this->stmt = $this->dbh->prepare($sql);
        }

        public function bind($params, $value, $type = null) {
            if(is_null($type)) {
                switch(true) {
                    case is_int($value);
                        $type = PDO::PARAM_INT;
                    break;

                    case is_bool($value);
                        $type = PDO::PARAM_BOOL;
                    break;

                    case is_null($value);
                        $type = PDO::PARAM_NULL;
                    break;

                    default;
                        $type = PDO::PARAM_STR;

                }
            }
            
            $this->stmt->bindValue($params, $value, $type);
            
        }

        public function execute() {
            return $this->stmt->execute();
        }

        public function result() {
            return $this->stmt->fetch(PDO::FETCH_OBJ);
        }

        public function resultsAll() {
            return $this->stmt->fecthAll(PDO::FETCH_OBJ);
        }

        public function maxRow() {
            return $this->stmt->rowCount();
        }

        public function lastId() {
            return $this->dbh->lastInsertId();
        }

    }

