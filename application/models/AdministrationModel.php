<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdministrationModel extends CI_Model {

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
}
