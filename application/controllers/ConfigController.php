<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConfigController extends CI_Controller {

	public function index() {
		$this->load->view("components/LoaderComponent");
		$this->load->view("components/HeaderComponent");
		$this->load->view("components/NavbarConfigComponent");
		$this->load->view("MainView");		
		$this->load->view("components/FooterComponent");
	}
}
