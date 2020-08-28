<?php defined('BASEPATH') OR exit('No direct script access allowed');

class IncidentModel extends CI_Model {

	// public function selectAllPersonal() {
	// 	$query = $this->db->query("SELECT id_personal, nombre, apellido_paterno, apellido_materno FROM personal");

	// 	return $query->result_array();
	// }
	
	function fetch() {
		$this->db->order_by('id_incidente', 'DESC');
		return $this->db->get('incidentes');
	}

	// function fetch_single_details($id_incidente) {
	// 	$this->db->where('id_incidente', $id_incidente);
	// 	$data = $this->db->get('incidentes');
	// 	$output = '<table width="100%" cellspacing="5" cellpadding="5">';
	// 	foreach($data->result() as $row) {
	// 		$output .= ' 1
						 2
						2
	// 		<tr>
	// 		<td width="75%">
	// 		<th><b>Clave : </b></th><td>'.$row->clve_incidente.'</td>
	// 		<p><b>Versión : </b>'.$row->v_incidente.'</p>
	// 		<p><b>Fecha Inicial : </b>'.$row->fecha_incidente .'</p>
	// 		<p><b>Nueva Fecha : </b> '.$row->fecha_registro.' </p>
	// 		<p><b>Incidencia : </b> '.$row->incidencia.' </p>
	// 		<p><b>Medida : </b> '.$row->medida.' </p>
	// 		<p><b>Responsable : </b> '.$row->responsable.' </p>
	// 		<p><b>Realizó : </b> '.$row->realizo.' </p>
	// 		<p><b>Autorizó : </b> '.$row->id_personal.' </p>
	// 		</td>
	// 		</tr>
	// 		';
	// 	}
	
	// 	$output .= '</table>';
	// 	return $output;
	// }
}