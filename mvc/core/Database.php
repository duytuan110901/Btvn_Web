<?php
    class Database{
        public $con;
        protected $servername = "localhost";
        protected $username = "root";
        protected $password = "";
        protected $post = 3307;
        protected $dbname = "sayhi";

        function __construct(){
            $this->con = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname, $this->post);
            mysqli_query($this->con, "SET NAMES 'utf8'");
        }
    }
?>