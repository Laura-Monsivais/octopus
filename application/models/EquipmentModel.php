<?php
if (!defined("BASEPATH")) exit("No direct script access allowed");

class EquipmentModel extends CI_Model {
	function __construct()
	{
		parent::__construct();
	}
	
	public function queryAllPersons() {
        return $this->db->query("SELECT id_personal, nombre FROM personal")->result_array();
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
}

