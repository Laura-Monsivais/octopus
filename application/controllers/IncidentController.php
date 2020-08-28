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
		$html = $this->IncidentModel->renderHTML(1);
		$this->pdf->loadHtml($html);
		$this->pdf->render();
		$this->pdf->stream("incidente.pdf", array("Attachment" => 0));
	}

	public function generateIncidentsPDF() {
		$html = $this->IncidentModel->renderPDF();
		$this->pdf->loadHtml($html);
		$this->pdf->render();
		$this->pdf->stream("incidente.pdf", array("Attachment" => 0));
	}
}