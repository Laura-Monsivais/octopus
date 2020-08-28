<?php defined('BASEPATH') OR exit('No direct script access allowed');

class IncidentController extends CI_Controller {

    public function __construct() { 
		parent::__construct();
	 	$this->load->model("IncidentModel");
	  	$this->load->library('pdf');	
    } 
    
	public function index() {
		$data['incident_data'] = $this->IncidentModel->fetch();
		$this->load->view("components/LoaderComponent");
		$this->load->view("components/HeaderComponent");
		$this->load->view("components/NavbarAdminComponent");
		$this->load->view("IncidentView", $data);		
		$this->load->view("components/FooterComponent");
	}

	public function pdfdetails()
	{
	 if($this->uri->segment(3))
	 {
	  $id_incidente = $this->uri->segment(3);
	  $html_content = $this->IncidentModel->fetch_single_details($id_incidente);
	  $this->pdf->loadHtml($html_content);
	  $this->pdf->render();
	  $this->pdf->stream("".$id_incidente.".pdf", array("Attachment"=>0));
	 }
    
}
}
