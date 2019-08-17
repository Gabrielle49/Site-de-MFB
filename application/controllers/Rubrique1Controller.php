<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rubrique1Controller extends MY_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Rubrique');
        
    }

	public function index()
	{	
		
	}
	public function  getFoire_aux_questions()
	{
		$data = $this->getlisteRubrique();
		$result["view"] = $this->load->view('FrontPages/Rubrique2.php',$data, TRUE);
		$this->load->view('Composant/Header.php',$result);
	}

	public function getOS3(){

		$data = $this->getlisteRubrique();
		$result["view"] = $this->load->view('FrontPages/Rubrique3.php',$data, TRUE);
		$this->load->view('Composant/Header.php',$result);
	}

	public function getTextes_Fondamentaux(){

		$data = $this->getlisteRubrique();
		$result["view"] = $this->load->view('FrontPages/Rubrique1.php',$data, TRUE);
		$this->load->view('Composant/Header.php',$result);
	}

}