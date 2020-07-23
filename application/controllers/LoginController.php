<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	public function index() {
		$this->load->view("LoginView");	
		$this->processingFormData();
	}

	public function processingFormData() {
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		if ($username != null and $password != null) {
			redirect("MainController");
		}
	}
}
