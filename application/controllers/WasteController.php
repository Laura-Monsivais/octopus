<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WasteController extends CI_Controller {

    function __construct() {
		parent::__construct();
		
	}

	public function index() {
		$this->load->view("components/LoaderComponent");
		$this->load->view("components/HeaderComponent");
		$this->load->view("components/NavbarAdminComponent");
		$this->load->view("WasteView");		
		$this->load->view("components/FooterComponent");
    }
}
