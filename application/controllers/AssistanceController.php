<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AssistanceController extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model("AssistanceModel");
		$this->load->model("PersonalModel");
		$this->load->model("NotificationModel"); 
	}

	public function index() {
		$data = array(
			"personal" => $this->PersonalModel->queryAllPersonal()
		);
		$this->load->view("components/LoaderComponent");
		$this->load->view("components/HeaderComponent");
		$this->load->view("components/NavbarComponent");
		$this->load->view("AssistanceView", $data);		
		$this->load->view("components/FooterComponent");
	}

	public function takeAssistance() {
		$schedule = $this->input->post("horario");
		$date = $this->input->post("fecha");
		$note = $this->input->post("nota");
		$notAssist = $this->input->post("falto");
		$idPerson = $this->input->post("idPersona");
		if ($schedule != null and $date != null and $note != null and $notAssist != null 
				and $idPerson != null) {
			$this->AssistanceModel->addAssistanceInfoToPerson($schedule, $date, 
				$notAssist, $note, $idPerson);
			$this->NotificationModel->detonateAssistanceNotification($notAssist, $idPerson);
			redirect("StaffController");
		}
	}
}
