<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EquipmentController extends CI_Controller {

	function __construct() { 
		parent::__construct();
		$this->load->model("EquipmentModel");  
	} 

	public function index() {
		$data = array(
			"persons" => $this->EquipmentModel->queryAllPersons()
		);
		$this->load->view("components/LoaderComponent");
		$this->load->view("components/HeaderComponent");
		$this->load->view("components/NavbarComponent");
		$this->load->view("EquipmentView", $data);		
		$this->load->view("components/FooterComponent");}
		
		public function create()
		{
			$mante = $this->EquipmentModel->getEquipo();
			$this->load->view("EquipmentView");
		}
	
		public function AgregarEquipo()
		{
			$nombreE = $this->input->post('nombreE');
			$desc = $this->input->post('desc');
			$marca = $this->input->post('marca');
			$modelo = $this->input->post('modelo');
			$costo = $this->input->post('costo');
			$stock = $this->input->post('stock');
			$fechaA = $this->input->post('fechaA');
			$mttoTF = $this->input->post('mttoTF');
			
	
			if (!$this->EquipmentModel->setEquipo($nombreE, $desc, $marca, $modelo, $costo, $stock, $fechaA, $mttoTF, $idperson)) {
				$this->input->post(null, false);
				$this->output->set_status_header(500);
			} else {
				return redirect(site_url() . "/EquipmentController");
			}
		}


	}
