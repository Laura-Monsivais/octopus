<?php
if (!defined("BASEPATH")) exit("No direct script access allowed");

class EquipmentModel extends CI_Model {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function getEquipo()
	{
		return $this->db->query("SELECT * FROM equipo")->result();
	}
	
	public function setEquipo( $nombreE, $desc, $marca, $modelo, $costo, $stock, $fechaA, $mttoTF, $idperson) {
	$data = array("nombre" => $nombreE, "descripcion" => $desc, "marca" => $marca, "modelo" => $modelo, 
	"costo" => $costo, "stock" => $stock, "fecha_adquisicion" => $fechaA, "matenimiento" => $mttoTF, "id_personal" => $idperson );
	return $this->db->insert("equipo", $data);
	}

	public function selectAllPersonal() {
        $query = $this->db->query("SELECT id_personal, nombre, apellido_paterno, apellido_materno FROM personal");

        return $query->result_array();
	}
	public function UnionEquipoPersonal() {
        $this->db->select('*');
        $this->db->from('equipo e');
        $this->db->join('personal p', 'e.id_personal = p.id_personal');
        $query = $this->db->get();

        return $query->result_array();
    }

	public function ListoMantenimiento($id_equipo,$data) {
        $this->db->where('id_equipo', $id_equipo);
        $result = $this->db->update('equipo', $data);
        if ($result) {
            return true;
        } else {
            return false;
        }
	}
	
	public function UpdateEquipment($id_equipo,$data) {
        $this->db->where('id_equipo', $id_equipo);
        $result = $this->db->update('equipo', $data);
        if ($result) {
            return true;
        } else {
            return false;
        }
	}
	public function getServiceForModify($id_equipo) {
		$query = $this->db->query("SELECT * FROM equipo WHERE id_equipo= {$id_equipo}");
		 return $query->row();
	 }

	 public function DeleteEquipment($id_equipo){
        $this->db->where('id_equipo', $id_equipo);
        $result = $this->db->delete('equipo');
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
 
	
	
}
