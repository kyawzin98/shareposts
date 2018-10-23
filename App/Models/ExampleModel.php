<?php
    class ExampleModel{
        
        //Create variable to stroe db connection
        private $db;

        public function __construct()
        {
            //Create Database Connection
            $this->db =  new Database;
        }
    }