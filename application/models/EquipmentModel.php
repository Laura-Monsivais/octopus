<?php
if (!defined("BASEPATH")) exit("No direct script access allowed");

class EquipmentModel extends CI_Model {
	public function obtenerPersonal($categoria) {
        return $this->db->query("SELECT * FROM personal ")->result_array();
	}
	
	
}

