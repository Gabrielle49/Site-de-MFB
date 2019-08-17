<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorie extends CI_Model{
    public $idCategorie;
    public $nomCategorie;

    function __construct(){
        parent::__construct();
    }
    public function getByMagasin(){
        $this->load->database();
		$query = $this->db->query("SELECT * FROM Categorie");
        return ($query->result_array());
    }

}?>
