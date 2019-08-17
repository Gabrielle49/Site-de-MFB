<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Sous_Rubrique extends CI_Model{
    private $idSousRubrique;
    private $nomSousRubrique;

    function __construct(){
        $this->load->database();
        parent::__construct();
    }

    public function getidSousRubrique(){
        return $this->idSousRubrique;
    }

    public function setidSousRubrique($id){
        $this->idSousRubrique = $id;
    }

    public function getnomSousRubrique(){
        return $this->nomSousRubrique;
    }

    public function setnomSousRubrique($nom){
        $this->nomSousRubrique = $nom;
    }

    public function getDetailParSousRubrique($idSousRubrique){
		$query = $this->db->query("SELECT * FROM Sous_Rubrique where idSousRubrique=$idSousRubrique");
        return ($query->result_array());
    }

}