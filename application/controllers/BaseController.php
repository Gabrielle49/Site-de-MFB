<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BaseController extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Rubrique');
        
    }

    public function index()
	{
		$listeRubrique['listeRubrique'] = $this->Rubrique->getAllRubrique($idRubrique);
		for($i=0;$i<count($listeRubrique['listeRubrique']);$i++){
			$resultat= str_replace("_", " ",$listeRubrique['listeRubrique'][$i]['nomsousrubrique']);	
			$listeRubrique['listeRubrique'][$i]['nomrubrique'] = $resultat;
		}
		$this->load->view('FrontPages/Header.php',$listeRubrique['listeRubrique']);
	}
}