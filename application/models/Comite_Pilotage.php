<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Comite_Pilotage extends CI_Model{
		private $idComite_Pilotage;
		private $Utilisateur;
		private $Mot_de_passe;

		function __construct(){
	        $this->load->database();
	        parent::__construct();
    	}

    	public function getidComitePilotage(){
       		 return $this->idComite_Pilotage;
    	}

    	public function setidComitePilotage($id){
        	$this->idComite_Pilotage = $id;
    	}

    	public function getUtilisateur(){
       		 return $this->Utilisateur;
    	}

    	public function setUtilisateur($User){
        	$this->Utilisateur = $User;
    	}

    	public function  authentification(){

    	}
}