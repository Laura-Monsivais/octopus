<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StaffController extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model("PersonalModel");
	}

	public function index() {
		$data = array(
			"people" => $this->PersonalModel->queryAllPersonalByAssistence()
		);
		$this->load->view("components/LoaderComponent");
		$this->load->view("components/HeaderComponent");
		$this->load->view("components/NavbarComponent");
		$this->load->view("StaffView", $data);		
		$this->load->view("components/FooterComponent");
	}
}
