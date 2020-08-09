<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProviderController extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("ProviderModel");
	}

	public function index($data = "") {
		$data = array(
			"providers" => $this->ProviderModel->queryAllProviders()
		);
		$this->load->view("components/LoaderComponent");
		$this->load->view("components/HeaderComponent");
		$this->load->view("components/NavbarComponent");
		$this->load->view("ProviderView", $data);
		$this->load->view("components/FooterComponent");
	}

	public function AgregarProveedor()
	{
		$Name = $this->input->post('Name');
		$Type = $this->input->post('Type');
		$Preferential = $this->input->post('Preferential');
		$Phone = $this->input->post('Phone');
		$Address = $this->input->post('Address');
		$Email = $this->input->post('Email');
		$Status = 1;
		if($Name!=null and $Type!=null and $Preferential!=null and $Phone!=null and 
			$Address!=null and $Email!=null and $Status!=null){
				$this->ProviderModel->setProvider($Name, $Type, $Preferential, $Phone, $Address, $Email,
					$Status);
		}
		redirect('ProviderController');
	}

	public function processDeleteProvider($idProvider) {
		$this->ProviderModel->deleteProvider($idProvider); 
		redirect("ProviderController");
	}

	public function modifyProvider($id = null) {
		$id = $this->db->escape($id);
		$data = $this->ProviderModel->getProviderForModify($id);		
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

		$isModify = $this->ProviderModel->modifyProvider($id,$serviceData);		
		if ($isModify) {
			redirect('/ProviderController', 'location');
		} 
	}
}
