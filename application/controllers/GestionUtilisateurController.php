<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GestionUtilisateurController extends MY_Controller {

	/*Inscription Utilisateur*/
	public function MakeInscription()
	{
		$this->load->view('authentification/Inscription.php');
	}

	/*Login Utilisateur*/
	public function MakeAuthentification()
	{
		$this->load->view('authentification/Login.php');
	}

}