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
		$this->load->view("ProviderUpdateView", compact("data"));
		$this->load->view("components/FooterComponent");
	}

	public function updateProvider() {
		$id = $this->input->post('id_proveedor');
		$serviceData = array(
		    'nombre' => $this->input->post('UName'),
		    'tipo' => $this->input->post('UType'),
		    'preferente' => $this->input->post('UPreferential'),
		    'telefono' => $this->input->post('UPhone'),
		    'direccion' =>  $this->input->post('UAddress'),
			'correo' => $this->input->post('UEmail'),
			'estatus' => 1,
			'fecha_creacion' => null,
			'fecha_actualizacion' => null,
			'id_personal' => null,
		    'id_proveedor' => $this->input->post('id_proveedor')
		);

		$isModify = $this->ProviderModel->modifyProvider($id,$serviceData);		
		if ($isModify) {
			redirect('/ProviderController', 'location');
		} 
	}
}
