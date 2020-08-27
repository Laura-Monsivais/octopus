<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PersonalController extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model("PersonalModel");
		$this->load->model("NotificationModel"); 
	}

	public function index() {
		$data = array(
			"people" => $this->PersonalModel->queryAllAdministators(),
			"countNotifications" => $this->NotificationModel->countAllNotification()
		);
		$this->load->view("components/LoaderComponent");
		$this->load->view("components/HeaderComponent", $data);
		$this->load->view("components/NavbarConfigComponent");
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
	
	public function modifyPersonal($id = null) {
		$id = $this->db->escape($id);
		$data = $this->PersonalModel->getPersonalForModify($id);	
		$countNotifications = $this->NotificationModel->countAllNotification();
		$this->load->view("components/LoaderComponent");
		$this->load->view("components/HeaderComponent", compact("countNotifications"));
		$this->load->view("components/NavbarComponent");
		$this->load->view("PersonalEditView", compact("data"));
		$this->load->view("components/FooterComponent");
	}

	public function updatePersonal() {
		$id = $this->input->post('idU');
		$PersonalData = array(
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

		$isModify = $this->PersonalModel->modifyPersonal($id,$PersonalData);		
		if ($isModify) {
			redirect("PersonalController");
		} 
	}

}
