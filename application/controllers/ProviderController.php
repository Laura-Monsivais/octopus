<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProviderController extends CI_Controller {

	public function index() {
		$this->load->view("components/LoaderComponent");
		$this->load->view("components/HeaderComponent");
		$this->load->view("components/NavbarComponent");
		$this->load->view("ProviderView");
		$this->load->view("components/FooterComponent");
	}
}
