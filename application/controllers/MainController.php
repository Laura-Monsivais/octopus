<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {

	function __construct() { 
		parent::__construct();
		$this->load->model("NotificationModel"); 
		$this->load->model("PersonalModel");
    } 

	public function index() {
		date_default_timezone_set("America/Mexico_City");
		$persons = $this->PersonalModel->queryAllPersonalWithBirthday();
		if($persons != null){
			foreach($persons as $person){
				$testdate = date_format(date_create($person["fecha_nacimiento"]),"m-d");
				if($testdate == date("m-d")){
					$this->NotificationModel->detonateBirthdayNotification($person["id_personal"]);
				}
			}
		}
		
		$data = array(
			"notifications" => $this->NotificationModel->queryAllNotification(),
			"countNotifications" => $this->NotificationModel->countAllNotification()
		);
		$this->load->view("components/LoaderComponent");
		$this->load->view("components/HeaderComponent", $data);
		$this->load->view("components/NavbarAdminComponent");
		$this->load->view("MainView", $data);		
		$this->load->view("components/FooterComponent");
	}
}
