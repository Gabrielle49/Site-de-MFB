<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BackController extends MY_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model('Rubrique');
    }

    public function getInsertInterface()
	{
		$data = $this->getlisteRubrique();
		$data["view"] = $this->load->view('BackPages/BackCrud.php', $data, TRUE);
		$this->load->view('Composant/Header.php',$data);
	}

	public function getListe()
	{
		$data = $this->getlisteRubrique();
		$data["view"] = $this->load->view('BackPages/BackCRUDelete.php', $data, TRUE);
		$this->load->view('Composant/Header.php',$data);
	}
	
	
}
