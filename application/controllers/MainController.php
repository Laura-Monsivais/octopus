<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {

	function __construct() { 
		parent::__construct();
		$this->load->model("NotificationModel"); 
    } 

	public function index() {
		$data = array(
			"notifications" => $this->NotificationModel->queryAllNotification(),
			"countNotifications" => $this->NotificationModel->countAllNotification()
		);
		$this->load->view("components/LoaderComponent");
		$this->load->view("components/HeaderComponent", $data);
		$this->load->view("components/NavbarComponent");
		$this->load->view("MainView", $data);		
		$this->load->view("components/FooterComponent");
	}
}
