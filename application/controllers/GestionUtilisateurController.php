<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GestionUtilisateurController extends MY_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Comite_Pilotage');
        
    }

	/*Inscription Utilisateur*/
	public function MakeInscription($messagevalidation = null,$erreur=null)
	{
		$resultat= str_replace("_", " ", $messagevalidation);	
		$data['messagevalidation'] =  $resultat;
		$data['erreur'] =  $erreur;
		$this->load->view('authentification/Inscription.php',$data);
	}

	public function InsertUtilisateur(){
		try
		{
			$data = array(
	            'username' => $this->input->post('username'),
	             'password' => $this->input->post('password')
	        );
			 $comite_pilotage = new Comite_Pilotage();
			 $comite_pilotage->setUtilisateur($data['username']);
			 $comite_pilotage->setMot_de_passe($data['password']);
			 $this->Comite_Pilotage->makeInscription($comite_pilotage);
	    }catch(Exception $e)
		{
			$data['messagevalidation'] = null;
			$data['erreur'] =$e->getMessage();
			$this->load->view('authentification/Inscription.php',$data);
		}
	}

	/*Login Utilisateur*/
	public function MakeAuthentification()
	{
		$this->load->view('authentification/Login.php');
	}

	public function verifyUtilisateur(){
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
		$listeUtilisateur = $this->Comite_Pilotage->makeAuthentification();
		for($i=0;$i<count($listeUtilisateur);$i++){
			$c1 = password_verify($data['password'],$listeUtilisateur[$i]['mot_de_passe']);
			$c2 = $data['username']==$listeUtilisateur[$i]['utilisateur'];
			if($c1 && $c2){
				$data = $this->getlisteRubrique();
				$data["view"] = $this->load->view('BackPages/Dashboard.php',"", TRUE);
				$this->load->view('Composant/Header.php',$data);$this->load->view('Composant/Header.php',$data);	
				break;		
			}
		}
		
	}

}