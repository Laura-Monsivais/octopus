<?php defined("BASEPATH") OR exit("No direct script access allowed");

class LoginController extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model("LoginModel");
	}

	public function index($warning = "") {
		$data = array(
			"warning" => $warning
		);
		if ($this->session->userdata("usuario")) {
			redirect("MainController");
		}
		$this->load->view("LoginView", $data);
	}

	public function validatingFormData() {
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		if ($username != null and $password != null) {
			$this->processingFormData($username, $password);
		}
	}

	private function processingFormData($username, $password) {
		$userValid = $this->LoginModel->collectFormData($username, $password);
		print_r($userValid);
		if ($userValid) {
			$this->session->set_userdata("usuario", $username);
			redirect("MainController");
		} else {
		   $warning = "El usuario y/o contraseña es incorrecto";
		   $this->index($warning);
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect("LoginController");
	} 
}


	