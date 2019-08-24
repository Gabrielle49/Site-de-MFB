<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends MY_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model('Rubrique');
    }

	public function index()
	{	
		$data = $this->getlisteRubrique();
		$data["view"] = $this->load->view('FrontPages/index.php', $data, TRUE);
		$this->load->view('Composant/Header.php',$data);
	}

}