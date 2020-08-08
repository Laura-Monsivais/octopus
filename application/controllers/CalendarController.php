<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CalendarController extends CI_Controller {

	function __construct() { 
		parent::__construct();
		$this->load->model("CalendarModel"); 
		log_message('debug', 'MyController initialised'); 
	} 

	public function index() {
		$data = array(
			"events" => $this->CalendarModel->queryAllEvents()
		);
		$this->load->view("components/LoaderComponent");
		$this->load->view("components/HeaderComponent");
		$this->load->view("components/NavbarComponent");
		$this->load->view("CalendarView", $data);		
		$this->load->view("components/FooterComponent");
	}

	public function validateFormData() {
		$date = $this->input->post("fecha");
		$event = $this->input->post("evento");
		$importantDate = $this->input->post("fecha_importante");
		if ($date != null and $event != null and $importantDate != null) {
			$this->processFormData($date, $event, $importantDate);
		} else {
			redirect("CalendarController");
		}
	}

	private function processFormData($date, $event, $importantDate) {
		$this->CalendarModel->collectFormData($date, $event, $importantDate); 
		redirect("CalendarController");
	}

	public function processDeleteEvent($idEvent) {
		$this->CalendarModel->deleteEvent($idEvent); 
		redirect("CalendarController");
	}
}