<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class MaintenanceController extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->model("MaintenanceModel");
	}
	
	public function index() {
		$this->load->view("components/LoaderComponent");
		$this->load->view("components/HeaderComponent");
		$this->load->view("components/NavbarComponent");
		$this->load->view("MaintenanceView");
		$this->load->view("components/FooterComponent");
	}

	public function create(){
		$vista = $this->load->view("EquipmentView","",true);
		$this->getTemplate($vista);

	}

	public function AgregarMantenimiento()
	{
		$clave = $this->input->post('cl');
		$tipo = $this->input->post('mtto');
		$observacion = $this->input->post('obs');
		$fechainicio = $this->input->post('fechaE');
		$fechafin = $this->input->post('fechaS');

		$this->form_validation->set_rules("cl","mtto","obs","fechaE","fechaS");

		if ($this->form_validation->run() === FALSE)
		{
			$this->output->set_status_header(400);
		}else{
			$mantenimiento = array(
			"clave" => $clave, 
			"tipo" => $tipo, 
			"observacion" => $observacion,
			"fecha_inicio" => $fechainicio, 
			"fecha_fin" => $fechafin);
			
			if (!$this->MaintenanceModel->add($mantenimiento)){
				$this->output->set_status_header(500);
			}else{
				$this->session->set_flashdata('msg','registro');
				redirect(site_url('EquipmentView'));
			}
		}
		$vista = $this->load->view("EquipmentView","",true);
	

	}
}
