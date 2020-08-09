<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {

	function __construct() { 
		parent::__construct();
        $this->load->model("NotificationModel");  
    } 

	public function index() {
		// $data = array(
		// 	"notificationMaintenance" => $this->NotificationModel->detonateMaintenanceNotification()
		// );
		$this->load->view("components/LoaderComponent");
		$this->load->view("components/HeaderComponent");
		$this->load->view("components/NavbarComponent");
		$this->load->view("MainView");		
		$this->load->view("components/FooterComponent");
	}
}
