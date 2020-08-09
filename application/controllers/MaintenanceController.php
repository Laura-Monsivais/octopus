<?php
defined("BASEPATH") or exit("No direct script access allowed");

class MaintenanceController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("MaintenanceModel");
	}

	public function index()
	{
		

		$this->load->view("components/LoaderComponent");
		$this->load->view("components/HeaderComponent");
		$this->load->view("components/NavbarComponent");
		$this->load->view("MaintenanceView");
		$this->load->view("components/FooterComponent");
	}

	public function create()
	{
		$mante = $this->MaintenanceModel->getMantenimiento();
		$this->load->view("EquipmentView");
	}

	public function AgregarMantenimiento()
	{
		$clave = $this->input->post('cl');
		$tipo = $this->input->post('mtto');
		$observacion = $this->input->post('obs');
		$fechainicio = $this->input->post('fechaE');
		$fechafin = $this->input->post('fechaS');

		if (!$this->MaintenanceModel->setMantenimiento($clave, $tipo, $observacion, $fechainicio, $fechafin)) {
			$this->input->post(null, false);
			$this->output->set_status_header(500);
		} else {
			return redirect(site_url() . "/EquipmentController");
		}
	}
}
