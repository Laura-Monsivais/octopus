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

    public function queryAllPersonal() {
        $this->db->select("id_personal, nombre, apellido_paterno, apellido_materno");
        $this->db->from("personal");
        return  $this->db->get()->result_array();
    }

    public function queryAllPersonalWithBirthday() {
        $this->db->select("id_personal, nombre, apellido_paterno, apellido_materno,fecha_nacimiento");
        $this->db->from("personal");
        return  $this->db->get()->result_array();
    }

    public function queryPersonalById($idPerson) {
        $query = "SELECT * FROM personal WHERE id_personal = ?"; 
        return $this->db->query($query, $idPerson)->result_array();       
    }

    public function getPersonalForModify($id_personal) {
        $query = $this->db->query("SELECT * FROM personal WHERE id_personal = {$id_personal}");
         return $query->row();
     }

     public function modifyPersonal($id_personal,$data) {
        $this->db->where('id_personal', $id_personal);
        $result = $this->db->update('personal', $data);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
