<?php defined('BASEPATH') OR exit('No direct script access allowed');

class IncidentController extends CI_Controller {
	
	public function __construct() { 
		parent::__construct();
		$this->load->library("pdf");
		$this->load->model("IncidentModel");	
		$this->load->model("PersonalModel");	
    } 
    
	public function index() {
		$data = array( 
			"incidentes" => $this->IncidentModel->fetch(),
			"personas" => $this->PersonalModel->queryAllPersonal()
		);
		$this->load->view("components/LoaderComponent");
		$this->load->view("components/HeaderComponent");
		$this->load->view("components/NavbarAdminComponent");
		$this->load->view("IncidentView", $data);		
		$this->load->view("components/FooterComponent");
	}

	public function pdfdetails() {
		$this->pdf->loadHtml($this->renderHTML());
		$this->pdf->render();
		$this->pdf->stream("incidente.pdf", array("Attachment" => 0));
		
	}
	
	public function InsertIncident()
		{
			$clave = $this->input->post('clave');
			$version = $this->input->post('version');
			$fecha_inicial = $this->input->post('fecha_inicial');
			$nueva_fecha = $this->input->post('nueva_fecha');
			$incidencia = $this->input->post('incidencia');
			$medida = $this->input->post('medida');
			$responsable = $this->input->post('responsable');
			$realizo = $this->input->post('realizo');
			$id_personal = $this->input->post('id_personal');
	
			if (!$this->IncidentModel->addIncident($clave, $version, $fecha_inicial, $nueva_fecha, $incidencia, $medida, $responsable, $realizo, $id_personal)) {
				$this->input->post(null, false);
				$this->output->set_status_header(500);
			} else {
				return redirect(site_url() . "/IncidentController");
			}
		}
// IncidentView
	public function EditIncident() {
			$id_incidente = $this->input->post('id_incidente');
			$incident_data = array(
				
				'clve_incidente' => $this->input->post('clave'),
				'v_incidente' => $this->input->post('version'),
				'fecha_incidente' => $this->input->post('fecha_inicial'),
				'fecha_registro' => $this->input->post('nueva_fecha'),
				'incidencia' => $this->input->post('incidencia'),
				'medida' => $this->input->post('medida'),
				'responsable' => $this->input->post('responsable'),
				'realizo' => $this->input->post('realizo'),
				'id_personal' => $this->input->post('id_personal')
			);
	
			$edit = $this->IncidentModel->updateIncident($id_incidente,$incident_data);		
			if ($edit) {
				redirect('/IncidentController', 'location');
			} 
		}
//IncidentUpdateView
		public function UpdateIncident($id_incidente = null) {
			
				$id_incidente = $this->db->escape($id_incidente);
				$data = $this->IncidentModel->IncidentForEdit($id_incidente);	
				
				$otro = array( 
					"incidentes" => $this->IncidentModel->fetch(),
					"personas" => $this->PersonalModel->queryAllPersonal()
				);

				$this->load->view("components/LoaderComponent");
				$this->load->view("components/HeaderComponent");
				$this->load->view("components/NavbarAdminComponent");
				$this->load->view("IncidentUpdateView", compact("data","otro"));
				$this->load->view("components/FooterComponent");
		}

		public function deleteIncident($id_incidente) {
			$isDelete = $this->IncidentModel->DeleteIncident($id_incidente);		
			if ($isDelete) {
				redirect('/IncidentController', 'location');
			} 
		}

		private function renderHTML() {
			return 
			"
				<table width='100%' border='1' style='margin-bottom: 40px;'>
					<thead ></thead> 
					<tbody ></tbody> 
				</table>
				<table width='100%' border='1' style='margin-bottom: 40px;'>
					<thead style='text-align: center; background-color: #53FF33;'>
						<tr >
							<td>Fecha</td>
							<td>Incidencia</td>
							<td>Medida correctora aplicada</td>
							<td>Responsable (Firma)</td>
						</tr>
					</thead> 
					<tbody ></tbody> 
				</table>
				<table width='100%' border='1'>
					<tbody >
						<tr >
							<td>Autorizó: </td>
							<td>Realizó:  </td>
						</tr>
					</tbody> 
				</table>
			";
		}
}
