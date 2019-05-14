<?php 
	class Database{
		private $con;
		private $dbhost = "localhost";
		private $dbuser = "root";
		private $dbpass = "";
		private $dbname = "tuto_poo"

		function __construct(){
			$this->connect_db();
		}

		public function  connect_db(){
			$this->con = mysqli_connect($this->dbhost,$this->dbuser,$this->dbpass,$this->dbname);
			if (mysqli_connect_error()) {
				die("Conexion a la base de datos falló ".mysqli_connect_error());
			}
		}

		public function sanitize($var){
			$return = mysqli_real_escape_string($this->con,$var);
			return $return;
		}
	}

 ?>