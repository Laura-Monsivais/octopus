<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PersonalModel extends CI_Model {

    public function processAddAdministator($posts) {
        $this->db->insert("personal", $posts);
    }

    public function queryAllAdministators() {
        return $this->db->query("SELECT * FROM personal")->result_array();
    }

    public function deleteAdministator($idAdministator) {
        $this->db->where("id_personal", $idAdministator); 
        $this->db->delete("personal"); 
    }
    
    // public function getPersonaById($personAssign) {
    //     return $personAssign;


    //     // $query = "SELECT id_personal FROM personal WHERE nombre = ? AND apellido_paterno = ? AND appellidp_materno  = ?LIMIT 1"; 
        
        
    //     // $userValid = $this->db->query($query, array("nombre" => $username, "apellido_paterno"  => $fatherName, 
    //     //     "appellido_materno" => $motherName)->result_array();
    //     // if ($userId != null) {
    //     //     return $userId;
    //     // }
    // }
}
