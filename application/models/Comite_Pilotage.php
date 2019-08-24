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
            try{
                $this->idComite_Pilotage = $id;
                if($this->idComite_Pilotage=="")
                {
                    throw new Exception("Champ vide1");
                }
            }catch(Exception $e){
                throw $e;
            }
    	}

    	public function getUtilisateur(){
       		 return $this->Utilisateur;
    	}

    	public function setUtilisateur($User){
            try{
        	   $this->Utilisateur = $User;
               if($this->Utilisateur=="")
               {
                    throw new Exception("Champ vide2");
               }
            }catch(Exception $e){
               throw $e;
            }
    	}

        public function getMot_de_passe(){
             return $this->Mot_de_passe;
        }

        public function setMot_de_passe($mot){
            try{
                $this->Mot_de_passe = $mot;
                if($this->Mot_de_passe==""){
                    throw new Exception("Champ vide3");
                }
            }catch(Exception $e){
                throw $e;
            }

        }

    	
        public function makeInscription($comite_pilotage)
        {
            try{
                $motdepasse = password_hash($comite_pilotage->getMot_de_passe(),PASSWORD_DEFAULT);
                $query = $this->db->query("insert into Comite_Pilotage (Utilisateur,Mot_de_passe) 
                    values ('".$comite_pilotage->getUtilisateur()."','$motdepasse')"); 
                $messagevalidation = "inscription_effectuer";
                redirect('GestionUtilisateurController/MakeInscription/'.$messagevalidation, 'refresh');     
            }
            catch(Exception $e){
                throw $e;
            }
        }

        public function makeAuthentification(){
            try{
                $query = $this->db->query("select * from comite_pilotage"); 
                return ($query->result_array());
            }catch(Exception $e){
                throw $e;
            }
        }
}