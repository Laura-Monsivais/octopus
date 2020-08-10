<?php
defined("BASEPATH") or exit("No direct script access allowed");

class MaintenanceController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("MaintenanceModel");
		$this->load->model("NotificationModel");
	}

	public function index() {
		$data = array(
			"equipoList" => $this->MaintenanceModel->Mant_Equipo());

		$this->load->view("components/LoaderComponent");
		$this->load->view("components/HeaderComponent");
		$this->load->view("components/NavbarComponent");
		$this->load->view("MaintenanceView",$data);		
		$this->load->view("components/FooterComponent");}
	

	public function indexMtto()
	{
		$data = array(
			"mttoList" => $this->MaintenanceModel->getMantenimiento(),
			
		
		);
		$this->load->view("components/LoaderComponent");
		$this->load->view("components/HeaderComponent");
		$this->load->view("components/NavbarComponent");
		$this->load->view("MaintenanceAddView", $data);
		$this->load->view("components/FooterComponent");
	}

	public function create()
	{
		$mante = $this->MaintenanceModel->getMantenimiento();
		$this->load->view("EquipmentView");
	}

	public function AgregarMantenimiento(){
	$this->load->view("components/LoaderComponent");
			$this->load->view("components/HeaderComponent");
			$this->load->view("components/NavbarComponent");
			$this->load->view("MaintenanceUpdateView");
			$this->load->view("components/FooterComponent");
	
		$clave = $this->input->post('cl');
		$tipo = $this->input->post('mtto');
		$observacion = $this->input->post('obs');
		$fechainicio = $this->input->post('fechaE');
		$fechafin = $this->input->post('fechaS');

		if (!$this->MaintenanceModel->setMantenimiento($clave, $tipo, $observacion, $fechainicio, $fechafin)) {
			$this->input->post(null, false);
			$this->output->set_status_header(500);
		} else {
			return redirect(site_url() . "/MaintenanceController/indexMtto");
		}
	}
	public function ModificarMantenimiento($idMtto = null) {
		$idMtto = $this->db->escape($idMtto);
		$data = $this->MaintenanceModel->getMaintenanceiForModify($idMtto);		
		$this->load->view("components/LoaderComponent");
		$this->load->view("components/HeaderComponent");
		$this->load->view("components/NavbarComponent");
		$this->load->view("MaintenanceUpdateView", compact("data"));
		$this->load->view("components/FooterComponent");
	}

	public function ActualizarMantenimiento() {
		$idMtto = $this->input->post('id_mantenimiento');
		$MttoData = array(
			
			'clave' => $this->input->post('cl'),
			'tipo' => $this->input->post('mtto'),
			'observacion' => $this->input->post('obs'),
			'fecha_inicio' => $this->input->post('fechaE'),
			'fecha_fin' => $this->input->post('fechaS'),
		);

		$isModify = $this->MaintenanceModel->UpdateMtto($idMtto,$MttoData);		
		if ($isModify) {
			redirect('/MaintenanceController/indexMtto', 'location');
		} 
	}
	public function EliminarMtto($idMtto) {
		$isDelete = $this->MaintenanceModel->DeleteMtto($idMtto);		
		if ($isDelete) {
			redirect('/MaintenanceController/indexMtto', 'location');
		} 
	}

}
