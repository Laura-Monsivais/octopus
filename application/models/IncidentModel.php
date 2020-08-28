<?php defined('BASEPATH') OR exit('No direct script access allowed');

class IncidentModel extends CI_Model {

	function fetch() {
		$this->db->order_by('id_incidente', 'DESC');
		return $this->db->get('incidentes');
	}

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

	 public function renderHTML($incidenteId) {
	    $this->db->where('id_incidente', 1);
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
									<td  width="20%">Clave:</td>
								</tr>
								<tr >
									<td  style="text-align: center;" rowspan="2">Reporte de incidentes ocurridos de la empresa</td>
									<td>Versión: ' . $row->fecha_incidente .' </td>
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
								<td>' . $row->fecha_incidente . '</td>
								<td>' . $row->fecha_incidente . '</td>
								<td>' . $row->fecha_incidente . '</td>
								<td>' . $row->fecha_incidente . '</td>
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
									<td>Autorizó: ' . $row->fecha_incidente . '</td>
									<td>Realizó:  ' . $row->fecha_incidente . '</td>
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
									<td  width="20%">Clave:</td>
								</tr>
								<tr >
									<td  style="text-align: center;" rowspan="2">Reporte de incidentes ocurridos de la empresa</td>
									<td>Versión: ' . $row->fecha_incidente .' </td>
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
								<td>' . $row->fecha_incidente . '</td>
								<td>' . $row->fecha_incidente . '</td>
								<td>' . $row->fecha_incidente . '</td>
								<td>' . $row->fecha_incidente . '</td>
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
									<td>Autorizó: ' . $row->fecha_incidente . '</td>
									<td>Realizó:  ' . $row->fecha_incidente . '</td>
								</tr>
							';
						}
		$html .= '      </tbody> 
					</table>
		         ';
		return $html;
	}
}