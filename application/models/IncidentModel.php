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

	public function addIncident( $clave, $version, $fecha_inicial, $nueva_fecha, $incidencia, $medida, $responsable, $realizo, $id_personal) {
			$data = array("clve_incidente" => $clave, "v_incidente" => $version, "fecha_incidente" => $fecha_inicial, "fecha_registro" => $nueva_fecha, 
			"incidencia" => $incidencia, "medida" => $medida, "responsable" => $responsable, "realizo" => $realizo, "id_personal" => $id_personal );
			return $this->db->insert("incidentes", $data);
			}
	
	public function updateIncident($id_incidente,$data) {
				$this->db->where('id_incidente', $id_incidente);
				$result = $this->db->update('incidentes', $data);
				if ($result) {
					return true;
				} else {
					return false;
				}
			}

	public function IncidentForEdit($id_incidente) {
				$query = $this->db->query("SELECT * FROM incidentes WHERE id_incidente= {$id_incidente}");
				 return $query->row();
			 }

	public function DeleteIncident($id_incidente){
				$this->db->where('id_incidente', $id_incidente);
				$result = $this->db->delete('incidentes');
				if ($result) {
					return true;
				} else {
					return false;
				}
			}

	function fetch_single_details($id_incidente)
		{
		$this->db->where('id_incidente', $id_incidente);
		$data = $this->db->get('incidentes');
		$output = '<table width="100%" border="1" bgcolor="#C0C0C0" align="center" cellspacing="5" cellpadding="5">';	foreach($data->result() as $row)
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

	function fetch_single_details($id_incidente) {
	 	$this->db->where('id_incidente', $id_incidente);
	 	$data = $this->db->get('incidentes');
		$output = '<table width="100%" cellspacing="5" cellpadding="5">';
	 	foreach($data->result() as $row) {
	 		$output .= '
	 		<tr>
	 		<td width="75%">
	 		<th><b>Clave : </b></th><td>'.$row->clve_incidente.'</td>
	 		<p><b>Versión : </b>'.$row->v_incidente.'</p>
	 		<p><b>Fecha Inicial : </b>'.$row->fecha_incidente .'</p>
	 		<p><b>Nueva Fecha : </b> '.$row->fecha_registro.' </p>
	 		<p><b>Incidencia : </b> '.$row->incidencia.' </p>
	 		<p><b>Medida : </b> '.$row->medida.' </p>
	 		<p><b>Responsable : </b> '.$row->responsable.' </p>
	 		<p><b>Realizó : </b> '.$row->realizo.' </p>
	 		<p><b>Autorizó : </b> '.$row->id_personal.' </p>
	 		</td>
	 		</tr>
	 		';
	 	}
	
	 	$output .= '</table>';
	 	return $output;
	 }
	}
	 public function renderHTML($incidenteId) {
	    $this->db->where('id_incidente', $incidenteId);
		$data = $this->db->get('incidentes');

		$html = '
					<table width="100%" border="1" style="margin-bottom: 40px; border-collapse: collapse; font-family: Arial, Helvetica, sans-serif;  font-size: 12px;">
						<tbody >';

						foreach($data->result() as $row) {
							$html .= 
								'
								<tr >
									<td  width="5%" rowspan="3"></td>
									<td  style="text-align: center;">Rancho Ubuntu S de RL MI de CV</td>
									<td  width="20%">Clave: ' . $row->clve_incidente .' </td>
								</tr>
								<tr >
									<td  style="text-align: center;" rowspan="2">Reporte de incidentes ocurridos de la empresa</td>
									<td>Versión: ' . $row->v_incidente .' </td>
								</tr>
								<tr >
									<td>Fecha:   ' . $row->fecha_incidente . ' </td>
								</tr>
								';
						}

		$html .=  '		</tbody> 
					</table>
		          ';
	 
		$html .= '
				<table width="100%" border="1" style="margin-bottom: 40px; border-collapse: collapse; font-family: Arial, Helvetica, sans-serif;  font-size: 12px;">
					<thead style="text-align: center; background-color: #53FF33;">
						<tr >
							<td>Fecha</td>
							<td>Incidencia</td>
							<td>Medida correctora aplicada</td>
							<td>Responsable (Firma)</td>
						</tr>
					</thead> 
					<tbody >
				';	

				foreach($data->result() as $row) {
					$html .= 
						'
							<tr >
								<td>' . $row->fecha_registro . '</td>
								<td>' . $row->incidencia . '</td>
								<td>' . $row->medida . '</td>
								<td>' . $row->responsable . '</td>
							</tr>
						';
				}

		$html .= '
					<tbody >
					</table>
				 ';

		$html .= '
					<table width="100%" border="1" style="border-collapse: collapse; font-family: Arial, Helvetica, sans-serif;  font-size: 12px;">
						<tbody >
				 ';
				 		foreach($data->result() as $row) {
							$html .= 
							'
								<tr >
									<td>Autorizó: ' . $row->id_personal . '</td>
									<td>Realizó:  ' . $row->realizo . '</td>
								</tr>
							';
						}
		$html .= '      </tbody> 
					</table>
		         ';
		return $html;
	}

	public function renderPDF() {
		$data = $this->db->get('incidentes');

		$html = '
					<table width="100%" border="1" style="margin-bottom: 40px; border-collapse: collapse; font-family: Arial, Helvetica, sans-serif;  font-size: 12px;">
						<tbody >';

						foreach($data->result() as $row) {
							$html .= 
								'
								<tr >
									<td  width="5%" rowspan="3"></td>
									<td  style="text-align: center;">Rancho Ubuntu S de RL MI de CV</td>
									<td  width="20%">Clave: ' . $row->clve_incidente .' </td>
								</tr>
								<tr >
									<td  style="text-align: center;" rowspan="2">Reporte de incidentes ocurridos de la empresa</td>
									<td>Versión: ' . $row->v_incidente .' </td>
								</tr>
								<tr >
									<td>Fecha:   ' . $row->fecha_incidente . ' </td>
								</tr>
								';
						}

		$html .=  '		</tbody> 
					</table>
		          ';
	 
		$html .= '
				<table width="100%" border="1" style="margin-bottom: 40px; border-collapse: collapse; font-family: Arial, Helvetica, sans-serif;  font-size: 12px;">
					<thead style="text-align: center; background-color: #53FF33;">
						<tr >
							<td>Fecha</td>
							<td>Incidencia</td>
							<td>Medida correctora aplicada</td>
							<td>Responsable (Firma)</td>
						</tr>
					</thead> 
					<tbody >
				';	

				foreach($data->result() as $row) {
					$html .= 
						'
							<tr >
								<td>' . $row->fecha_registro . '</td>
								<td>' . $row->incidencia . '</td>
								<td>' . $row->medida . '</td>
								<td>' . $row->responsable . '</td>
							</tr>
						';
				}

		$html .= '
					<tbody >
					</table>
				 ';

		$html .= '
					<table width="100%" border="1" style="border-collapse: collapse; font-family: Arial, Helvetica, sans-serif;  font-size: 12px;">
						<tbody >
				 ';
				 		foreach($data->result() as $row) {
							$html .= 
							'
								<tr >
									<td>Autorizó: ' . $row->id_personal . '</td>
									<td>Realizó:  ' . $row->realizo . '</td>
								</tr>
							';
						}
		$html .= '      </tbody> 
					</table>
		         ';
		return $html;
	}
}
