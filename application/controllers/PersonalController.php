
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PersonalController extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model("PersonalModel");
	}

	public function index() {
		$data = array(
			"people" => $this->PersonalModel->queryAllAdministators()
		);
		$this->load->view("components/LoaderComponent");
		$this->load->view("components/HeaderComponent");
		$this->load->view("components/NavbarComponent");
		$this->load->view("PersonalView", $data);		
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
			"contrasena" => $this->generateEncryption($this->input->post("contrasena")),
			"telefono" => $this->input->post("telefono"),
			"calle" => $this->input->post("calle"),
			"fraccionamiento" => $this->input->post("fraccionamiento"),
			"codigo_postal" => $this->input->post("codigoPostal"),
			"numero" => $this->input->post("numero"),
			"pais" => $this->input->post("pais"),
			"experiencia" => $this->input->post("experiencia"),
			"estatus" => 1
		);
		$this->PersonalModel->processAddAdministator($posts);
		redirect("PersonalController");
	}

	public function processDeleteAdministrador($idAdministrador) {
		$this->PersonalModel->deleteAdministator($idAdministrador); 
		redirect("PersonalController");
	}

	private function generateEncryption($password) {
		$option = ["cost" => 12];
		return password_hash($password, PASSWORD_DEFAULT, $option);
    }
}