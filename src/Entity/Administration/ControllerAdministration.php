<?php
namespace Locations\Entity\Administration;

require '../../../vendor/autoload.php';

if(isset($_POST['insertion'])){
	$email = $_POST['email'];
	$nom = $_POST['nom'];
	$sexe = $_POST['sexe'];
	$situation = $_POST['situation'];
	$mdp = $_POST['mdp'];
	$tel = $_POST['tel'];
	
	$administration = new Administration();
	$administration->set_email($email);
	$administration->set_nom($nom);
	$administration->set_sexe($sexe);
	$administration->set_statut($situation);
	$administration->set_mdp($mdp);
	$administration->set_tel($tel);
	
	$administration->insertionAdministration();
	
}