<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Fichier extends CI_Model{
	private $idF;
    private $NomFichier;

    function __construct(){
        $this->load->database();
        parent::__construct();
    }

    public function getidF(){
        return $this->idF;
    }

    public function setidF($id){
        try{
            $this->idF = $id;
            if($this->idF==""){
                throw new Exception("id vide");
            }
        }catch(Exception $e){
            throw $e;
        }
    }

    public function getNomFichier(){
        return $this->NomFichier;
    }

    public function setNomFichier($nom){
        try{
            $this->NomFichier = $nom;
        }catch(Exception $e){
            throw $e;
        }
    }

    public function getFile($type,$debut,$fin){
    	try{
	    	$query = $this->db->query("SELECT * FROM Fichier f join Type t on 
	                f.idtype = t.idtype where t.type = '$type' LIMIT $fin OFFSET $debut");
            return ($query->result_array());
	    }catch(Exception $e){
	    	throw $e;
	    }
    }

    public function getNumberFile($type){
        try{
            $query = $this->db->query("SELECT count(*) from Fichier f join Type t on
                    f.idtype = t.idtype where t.type = '$type'");
            return ($query->result_array());
        }catch(Exception $e){
            throw $e;
        }
    }

}