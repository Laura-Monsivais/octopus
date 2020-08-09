<?php
if (!defined("BASEPATH")) exit("No direct script access allowed");

class MaintenanceModel extends CI_Model {
	function __construct()
	{
		parent::__construct();
	}
	
	public function getMantenimiento()
	{
		return $this->db->query("SELECT * FROM mantenimiento")->result();
	}
	
	public function setMantenimiento( $clave, $tipo, $observacion, $fechainicio, $fechafin) {
	$data = array("clave" => $clave, "tipo" => $tipo, "observacion" => $observacion, "fecha_inicio" => $fechainicio, "fecha_fin" => $fechafin );
	return $this->db->insert("mantenimiento", $data);
	}

	public function selectAllPersonal() {
        $query = $this->db->query("SELECT id_personal, nombre, apellido_paterno, apellido_materno FROM personal");

        return $query->result_array();
	}
	public function EquipmentMtto() {
        $this->db->select('*');
        $this->db->from('mantenimiento m');
        $this->db->join('mantenimiento_equipo me', 'm.id_mantenimiento = me.id_mantenimiento');
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
	
	public function UpdateMtto($id_mtto,$data) {
        $this->db->where('id_mantenimiento', $id_mtto);
        $result = $this->db->update('mantenimiento', $data);
        if ($result) {
            return true;
        } else {
            return false;
        }
	}
	public function getMaintenanceiForModify($id_mtto) {
		$query = $this->db->query("SELECT * FROM mantenimiento WHERE id_mantenimiento= {$id_mtto}");
		 return $query->row();
	 }

	 public function DeleteMtto($id_mtto){
        $this->db->where('id_mantenimiento', $id_mtto);
        $result = $this->db->delete('mantenimiento');
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
	public function ModifyMtto($idEquipo,$data) {
		$this->db->where('id_equipo', $idEquipo);
		$result = $this->db->update('equipo', $data);
		if ($result) {
			return true;
		} else {
			return false;
		}
	}
	
	
}

