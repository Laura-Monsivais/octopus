<?php defined('BASEPATH') OR exit('No direct script access allowed');

class IncidentModel extends CI_Model {

	public function selectAllPersonal() {
			$query = $this->db->query("SELECT id_personal, nombre, apellido_paterno, apellido_materno FROM personal");

			return $query->result_array();
		}
		
	function fetch()
			{
			$this->db->order_by('id_incidente', 'DESC');
			return $this->db->get('incidentes');
		}

	public function setEquipo( $nombreE, $desc, $marca, $modelo, $costo, $stock, $fechaA, $mttoTF, $idperson) {
			$data = array("nombre_equipo" => $nombreE, "descripcion" => $desc, "marca" => $marca, "modelo" => $modelo, 
			"costo" => $costo, "stock" => $stock, "fecha_adquisicion" => $fechaA, "matenimiento" => $mttoTF, "id_personal" => $idperson );
			return $this->db->insert("equipo", $data);
			}

	function fetch_single_details($id_incidente)
		{
		$this->db->where('id_incidente', $id_incidente);
		$data = $this->db->get('incidentes');
		$output = '<table width="100%" border="1" bgcolor="#C0C0C0" align="center" cellspacing="5" cellpadding="5">';
		foreach($data->result() as $row)
		{
		$output .= '
			<tr >
				<th>Clave</th>
				<th>Versión</th>
				<th>Fecha Inicial</th>
				<th>Nueva fecha</th>
				<th>Incidencia</th>
				<th>Medida</th>
				<th>Responsable</th>
				<th>Realizó</th>
				<th>Autorizó</th>
		
				<tr>
				<td>'.$row->clve_incidente.'</td>
				<td>'.$row->v_incidente.'</td>
				<td>'.$row->fecha_incidente.'</td>
				<td>'.$row->fecha_registro.'</td>
				<td>'.$row->incidencia.'</td>
				<td>'.$row->medida.'</td>
				<td>'.$row->responsable.'</td>
				<td>'.$row->realizo.'</td>
				<td>'.$row->id_personal.'</td>
		</td>
		</tr>

		';
		}
		
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
