
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdministrationController extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model("AdministrationModel");
	}

	public function index() {
		$data = array(
			"people" => $this->AdministrationModel->queryAllAdministators()
		);
		$this->load->view("components/LoaderComponent");
		$this->load->view("components/HeaderComponent");
		$this->load->view("components/NavbarComponent");
		$this->load->view("AdministrationView", $data);		
		$this->load->view("components/FooterComponent");
	}

	public function validateFormData() {
		$posts = array(
			"nombre" => $this->input->post("nombre"),
			"apellido_paterno" => $this->input->post("apellidoPaterno"),
			"apellido_materno" => $this->input->post("apellidoMaterno"),
			"edad" => $this->input->post("edad"),
			"fecha_nacimiento" => $this->input->post("fechaNacimiento"),
			"RFC" => $this->input->post("RFC"),
			"fecha_ingreso" => $this->input->post("fechaIngreso"),
			"usuario" => $this->input->post("nombreUsario"),
			"contrasena" => $this->input->post("contrasena"),
			"telefono" => $this->input->post("telefono"),
			"calle" => $this->input->post("calle"),
			"fraccionamiento" => $this->input->post("fraccionamiento"),
			"codigo_postal" => $this->input->post("codigoPostal"),
			"numero" => $this->input->post("numero"),
			"pais" => $this->input->post("pais"),
			"experiencia" => $this->input->post("experiencia"),
			"estatus" => 1
		);
		$this->AdministrationModel->processAddAdministator($posts);
		redirect("AdministrationController");
	}

	public function processDeleteAdministrador($idAdministrador) {
		$this->AdministrationModel->deleteAdministator($idAdministrador); 
		redirect("AdministrationController");
	}
}