<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class ServiceController extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model("ServiceModel");
	}

	public function index($data = "") {
		$data = array(
			"serviceList" => $this->ServiceModel->selectAllServices()
		);

		$this->load->view("components/LoaderComponent");
		$this->load->view("components/HeaderComponent");
		$this->load->view("components/NavbarComponent");
		$this->load->view("ServiceView", $data);	
		$this->load->view("components/FooterComponent");
	}

	public function insertService() {
		$tipo = $this->input->post('tipo');
		$fecha_emision = $this->input->post('fecha_emision');	
		$fecha_expiracion = $this->input->post('fecha_expiracion');
		$costo = $this->input->post('costo');
		$tipo_pago = $this->input->post('tipo_pago');
		$pendiente = $this->input->post('pendiente');
		$personal = $this->input->post('personal');

		if ($fecha_emision > $fecha_expiracion) {
			echo "<script>alert('La fecha de emisión no puede ser mayor a la fecha de expiración')</script>";
			redirect('/ServiceController', 'location');
		} else {
			$isInsert = $this->ServiceModel->addService($tipo,$fecha_emision,$fecha_expiracion,$costo,$tipo_pago,$pendiente,$personal);	
			if ($isInsert) {
				redirect('/ServiceController', 'location');
			}  
		}
	}

	public function deleteService($id) {
		$isDelete = $this->ServiceModel->removeService($id);		
		if ($isDelete) {
			redirect('/ServiceController', 'location');
		} 
	}

	public function updateServiceByPayment($id) {
		$serviceData = array(
		    'pendiente' => 0
		);

		$isModify = $this->ServiceModel->modifyServicePayment($id, $serviceData);		
		if ($isModify) {
			redirect('/ServiceController', 'location');
		} 
	}

	public function modifyService($id = null) {
		$id = $this->db->escape($id);
		$data = $this->ServiceModel->getServiceForModify($id);		
		$this->load->view("components/LoaderComponent");
		$this->load->view("components/HeaderComponent");
		$this->load->view("components/NavbarComponent");
		$this->load->view("ServiceUpdateView", compact("data"));
		$this->load->view("components/FooterComponent");
	}

	public function updateService() {
		$id = $this->input->post('idU');
		$serviceData = array(
		    'tipo' => $this->input->post('tipoU'),
		    'fecha_emision' => $this->input->post('fecha_emisionU'),
		    'fecha_expiracion' => $this->input->post('fecha_expiracionU'),
		    'costo' => $this->input->post('costoU'),
		    'tipo_pago' => $this->input->post('tipo_pagoU'),
		    'pendiente' => $this->input->post('pendienteU'),
		    'id_personal' => $this->input->post('personalU')
		);

		$isModify = $this->ServiceModel->modifyService($id,$serviceData);		
		if ($isModify) {
			redirect('/ServiceController', 'location');
		} 
	}
	
}



