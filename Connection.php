<?php

    class Connection{
        public $conn;
        public $hostname = 'localhost';
        private $hostuser='root';
        private $hostpass ='';
        private $dbname = 'db_practice';

        public function __construct(){
            $this->conn=$this->connect();
        }

        public function connect(){
            $conn = new mysqli(
                $this->hostname,
                $this->hostuser,
                $this->hostpass,
                $this->dbname
            );

            return $conn;
        }

    }