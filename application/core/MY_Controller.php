<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Rubrique');
       
    }
    public function getlisteRubrique(){
    	$data['listeRubrique'] = $this->Rubrique->getAllRubrique();
		for($i=0;$i<count($data['listeRubrique']);$i++){
			$resultat= str_replace("_", " ",$data['listeRubrique'][$i]['nomrubrique']);	
			$data['listeRubrique'][$i]['nomrubrique'] = $resultat;
			$data['listeRubrique'][$i][0] = $this->Rubrique->getSousRubriqueParRubrique($data['listeRubrique'][$i]['idrubrique']);
			for($j=0;$j<count($data['listeRubrique'][$i][0]);$j++){
				$resultat= str_replace("_", " ",$data['listeRubrique'][$i][0][$j]['nomsousrubrique']);	
				$data['listeRubrique'][$i][0][$j]['nomsousrubrique'] = $resultat;
			}
		}
		return $data;
    }
		
	

}