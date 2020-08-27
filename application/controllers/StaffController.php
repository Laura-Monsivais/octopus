<?php defined('BASEPATH') OR exit('No direct script access allowed');

class StaffController extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model("PersonalModel");
		$this->load->model("NotificationModel"); 
	}

	public function index() {
		$data = array(
			"people" => $this->PersonalModel->queryAllPersonalByAssistence(),
			"countNotifications" => $this->NotificationModel->countAllNotification());
		$this->load->view("components/LoaderComponent");
		$this->load->view("components/HeaderComponent", $data);
		$this->load->view("components/NavbarComponent");
		$this->load->view("StaffView", $data);		
		$this->load->view("components/FooterComponent");
	}

	public function AgregarPersonal() {
		$Name = $this->input->post('name');
		$last_name = $this->input->post('last_name');
		$mother_last_name = $this->input->post('mother_last_name');
		$Age = $this->input->post('age');
		$birthdate = $this->input->post('birthdate');
		$RFC = $this->input->post('RFC');
		$in_date = $this->input->post('in_Date');
		$egress_Date = $this->input->post('egress_Date');
		$user = $this->input->post('user');
		$password = $this->input->post('password');
		$phone = $this->input->post('phone');
		$street = $this->input->post('street');
		$fracc = $this->input->post('fracc');
		$postal_Code = $this->input->post('postal_Code');
		$number = $this->input->post('number');
		$country = $this->input->post('country');
		$experience = $this->input->post('experience');
		$status = $this->input->post('status');
		$creation_date = $this->input->post('creation_date');
		$update_date = $this->input->post('update_date');


		if($Name!=null and $last_name!=null and $Age!=null and 
			$birthdate!=null and $RFC!=null and $in_date!=null and 
			$user!=null and $password!=null and $phone!=null and $street!=null and $fracc!=null and
			$postal_Code!=null and $number!=null and $country!=null and $experience!=null and 
			$creation_date!=null)
			{
				$this->StaffModel->setStaff($Name,$last_name,$mother_last_name,$Age,$birthdate,$RFC,$in_date,$egress_Date,$user,$password,
				$phone,$street,$fracc,$postal_Code,$number,$country,$experience,$status,$creation_date,$update_date);
		}
		redirect('StaffController');
	}

	public function processDeleteStaff($id_personal) {
		$this->StaffModel->deleteStaffUser($id_personal); 
		redirect("StaffController");
	}

	public function processSearchStaff() {
		$Search = $this->input->post('Search');
		$this->StaffModel->getStaffUser	($Search); 
		redirect("StaffController");
	}
}
