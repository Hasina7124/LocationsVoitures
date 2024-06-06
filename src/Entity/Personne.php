<?php
namespace Locations\Entity;
class Personne{
	public $email;
    public $nom;
    public $sexe;
    public $statut;
	public $tel;
	
	
	public function set_email($email){
        $this->email = $email;
    }
	public function get_email($email){
        return $this->email;
    }
    public function set_nom($nom){
        $this->nom = $nom;
    }
    public function set_sexe($sexe){
        $this->sexe = $sexe;
    }
    public function set_statut($statut){
        $this->statut = $statut;
    }
	public function set_tel($tel){
        $this->tel = $tel;
    }
}