<?php
    class Dbconfig {
        protected $serverName;
        protected $userName;
        protected $passCode;
        protected $dbName;

        function __construct() {
            $this -> serverName = 'localhost:3366';
            $this -> userName = 'root';
            $this -> passCode = '';
            $this -> dbName = 'laptop_shop';
        }
    }
