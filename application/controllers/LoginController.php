<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class LoginController extends CI_Controller {

	public function index() {
		if ($this->session->userdata("usuario")) {
			redirect("MainController");
		}
		$this->load->view("LoginView");
	}

	/**
	 * 
	 */
	public function validatingFormData() {
		$this->form_validation->set_rules("username", "Nombre de usuario", "trim|required|min_length[5]|max_length[30]");
		$this->form_validation->set_rules("password", "Contraseña", "trim|required|min_length[5]|max_length[20]");
		if ($this->form_validation->run()) {
			$username = $this->input->post("username");
			$password = $this->input->post("password");
			$this->processingFormData($username, $password);
		} else {
			$this->load->view("LoginView");
		}
	}
	
	/**
	 * 
	 */
	private function processingFormData($username, $password) {
		$this->load->model("LoginModel");
		$userValid = $this->LoginModel->collectFormData($username, $password);
		if ($userValid) {
			$this->session->set_userdata("usuario", $username);
			redirect("MainController");
		} else {
			$data["message"] = "Las credenciales son incorrectas";
			$this->load->view("LoginView", $data);
		}
	}

	/**
	 * 
	 */
	public function logout() {
		$this->session->sess_destroy();
		redirect("LoginController");
	} 
}
