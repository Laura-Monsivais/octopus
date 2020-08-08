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
}
