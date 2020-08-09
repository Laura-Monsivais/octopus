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
    
    public function queryAllPersonalByAssistence() {
        $sql = "SELECT p.id_personal, p.nombre, p.apellido_paterno, p.apellido_materno, p.telefono, 
            a.horario, a.fecha, a.falto, a.nota FROM personal p INNER JOIN asistencia a ON p.id_personal = a.id_personal";
        return $this->db->query($sql)->result_array();        
    }
}
