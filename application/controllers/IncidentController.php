<?php defined('BASEPATH') OR exit('No direct script access allowed');

class IncidentController extends CI_Controller {

    function __construct() { 
		  parent::__construct();
      $this->load->model("IncidentModel");
    } 
    
	public function index() {
        $data = array(
            "incidentes" => $this->IncidentModel->incidentes()
        );
		$this->load->view("components/LoaderComponent");
		$this->load->view("components/HeaderComponent");
		$this->load->view("components/NavbarAdminComponent");
		$this->load->view("IncidentView", $data);		
		$this->load->view("components/FooterComponent");
    }
    
    public function generatePDF() { 
      $dompdf = new Dompdf\Dompdf();
      $html = $this->load->view('welcome_message',[],true);
      $dompdf->loadHtml("Hola");
      $dompdf->setPaper('A4', 'landscape');
      $dompdf->render();
      $pdf = $dompdf->output();
      $dompdf->stream();
    }
}
