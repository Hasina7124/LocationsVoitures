<?php
namespace Locations\DataBase;
use PDO;

class Connections{
	private $servername = "localhost";
	private $username = "root";
	private $password = "";
	private $database = "locations";
	private $connexion;
	
	function __construct(){
		try{
			$this->connexion = new PDO("mysql:host=$this->servername;dbname=$this->database", $this->username, $this->password);
			//echo "connexion avec succes";
		}catch(PDOException $e){
			//echo "Connexion echouer: ".$e->getMessage();
		}
	}
	
	function getconnection(){
		return $this->connexion;
	}
}