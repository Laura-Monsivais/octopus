<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {

	public function index() {
		$this->load->view("LoaderComponent");
		$this->load->view("HeaderComponent");
		$this->load->view("NavbarComponent");
		$this->load->view("FooterComponent");
	}
}
