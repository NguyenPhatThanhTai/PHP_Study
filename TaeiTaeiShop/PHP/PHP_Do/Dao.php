<?php
    require 'PHP/PHP_Connection/MySqlConnection.php';
    class MySql extends Dbconfig{
        public $connectionString;
        public $dataSet;
        private $sqlQuery;

        protected $databaseName;
        protected $hostName;
        protected $userName;
        protected $passCode;

        function __construct()    {
            $this -> connectionString = NULL;
            $this -> sqlQuery = NULL;
            $this -> dataSet = NULL;

            $dbPara = new Dbconfig();
            $this -> databaseName = $dbPara -> dbName;
            $this -> hostName = $dbPara -> serverName;
            $this -> userName = $dbPara -> userName;
            $this -> passCode = $dbPara ->passCode;
            $dbPara = NULL;
        }

        function dbConnect()    {
            $this -> serverName = 'localhost:3366';
            $this -> userName = 'root';
            $this -> passCode = '';
            $this -> dbName = 'laptop_shop';
            $this -> connectionString = mysqli_connect($this -> serverName, $this -> userName, $this -> passCode, $this -> dbName);
            return $this -> connectionString;
        }

        function dbDisconnect() {
            $this -> connectionString = NULL;
            $this -> sqlQuery = NULL;
            $this -> dataSet = NULL;
            $this -> databaseName = NULL;
            $this -> hostName = NULL;
            $this -> userName = NULL;
            $this -> passCode = NULL;
        }

        function selectAll($tableName)  {
            $this -> sqlQuery = 'SELECT * FROM '.$this -> databaseName.'.'.$tableName;
            $this -> dataSet = mysqli_query($this -> connectionString,$this -> sqlQuery);
            return $this -> dataSet;
        }

        function selectDetail($Id){
            $this -> sqlQuery = 'SELECT * FROM product_detail WHERE Laptop_Id = '.$Id;
            $this -> dataSet = mysqli_query($this -> connectionString,$this -> sqlQuery);
            return $this -> dataSet;
        }
}
