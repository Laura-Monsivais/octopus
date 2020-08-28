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