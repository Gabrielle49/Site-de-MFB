<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rubrique2Controller extends CI_Controller {

	public function __construct(){
        parent::__construct();
    }

	public function index()
	{	
		$page_data['name'] = "wawa";
		$result["view"] = $this->load->view('FrontPages/Rubrique2.php', $page_data, TRUE);
		$this->load->view('Composant/Header.php',$result);
	}

}