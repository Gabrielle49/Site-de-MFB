<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rubrique1Controller extends MY_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Rubrique');
        $this->load->model('Fichier');
        
    }

	public function index()
	{	
		
	}
	public function  getFoire_aux_questions()
	{
		try{
			$data = $this->getlisteRubrique();
			$result["view"] = $this->load->view('FrontPages/Rubrique2.php',$data, TRUE);
			$this->load->view('Composant/Header.php',$result);
		}catch(Exception $e){
			$result["erreur"] = $e->getMessage();
			$this->load->view('Composant/Header.php',$result);
		}
	}

	public function getOS3(){

		$data = $this->getlisteRubrique();
		$result["view"] = $this->load->view('FrontPages/detailOS.php',$data, TRUE);
		$this->load->view('Composant/Header.php',$result);
	}

	public function getTextes_Fondamentaux(){

		$data = $this->getlisteRubrique();
		$result["view"] = $this->load->view('FrontPages/Rubrique1.php',$data, TRUE);
		$this->load->view('Composant/Header.php',$result);
	}


	public function getPSMFP(){
		$data = $this->getlisteRubrique();
		$result["view"] = $this->load->view('FrontPages/PSMFP.php',$data, TRUE);
		$this->load->view('Composant/Header.php',$result);
	}

	public function getEvolutionPSMFP(){
		$data = $this->getlisteRubrique();
		$result["view"] = $this->load->view('FrontPages/EvolutionPSMFP.php',$data, TRUE);
		$this->load->view('Composant/Header.php',$result);
	}

	public function getListeDocument($type,$debut,$fin){
		$data = $this->getlisteRubrique();
		$data["nombredocument"] = $this->Fichier->getNumberFile($type);
		$data["listedocument"] = $this->Fichier->getFile($type,$debut,$fin);
		$result["view"] = $this->load->view('FrontPages/Rubrique1.php',$data, TRUE);
		$this->load->view('Composant/Header.php',$result);
	}

}