<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Rubrique extends CI_Model{
    private $idRubrique;
    private $nomRubrique;

    function __construct(){
        $this->load->database();
        parent::__construct();
    }

    public function getidRubrique(){
        return $this->idRubrique;
    }

    public function setidRubrique($id){
        $this->idRubrique = $id;
    }

    public function getnomRubrique(){
        return $this->nomRubrique;
    }

    public function setnomRubrique($nom){
        $this->nomRubrique = $nom;
    }

    public function getAllRubrique(){
       	$query = $this->db->query("SELECT * FROM Rubrique");
        return ($query->result_array());
       
    }

    public function getSousRubriqueParRubrique($idRubrique){
        $query = $this->db->query("SELECT * FROM Sous_Rubrique sR join Possede P on 
                sR.idSousRubrique = P.idSousRubrique where P.idRubrique = $idRubrique");
        return ($query->result_array());
    }

}
