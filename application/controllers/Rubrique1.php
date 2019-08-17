<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rubrique1 extends CI_Controller {

	public function index()
	{
		$this->load->view('FrontPages/Rubrique1.php');
	}

}