<?php
namespace Locations\Entity\Administration;

use PDO;
use Locations\Entity\Personne;
use Locations\DataBase\Connections;

require '../../../vendor/autoload.php';

class Administration extends Personne{
	public $mdp;
	public function set_mdp($mdp){
        $this->mdp = $mdp;
    }
	
	function insertionAdministration(){
		//Appeler la connection
		$conn = new Connections();
		$connexion = $conn->getconnection();
		
		if($connexion === null){
			throw new \Exception("Failed to connect with database");
		}
		
		$sql = "INSERT INTO administration (email, nom, sexe, statut, password, tel) VALUES (:email, :nom, :sexe, :statut, :mdp, :tel)";
		$statement = $connexion->prepare($sql);

		$statement->bindParam(':email',$this->email);
		$statement->bindParam(':nom',$this->nom);
		$statement->bindParam(':sexe',$this->sexe);
		$statement->bindParam(':statut',$this->statut);
		$statement->bindParam(':mdp',$this->mdp);
		$statement->bindParam(':tel',$this->tel);
		$statement->execute();
		
		$statement->closeCursor();
		$connexion = null;
		
		$connexion = $conn->getconnection();
		$sqlId = "SELECT id_admin FROM administration where nom = :nom and password = :mdp";
		$statement = $connexion->prepare($sqlId);
		
		$statement->bindParam(':nom',$this->nom);
		$statement->bindParam(':mdp',$this->mdp);
		$statement->execute();
		
		$statement->closeCursor();
		$connexion = null;
	}
}