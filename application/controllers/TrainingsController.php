<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TrainingsController extends CI_Controller {

    public function indexx() {
        $this->load->model('TrainingsModel');
		

        if($this->TrainingsModel->DeleteTraining(2))
		{
			echo "yeah";
		}
		else
		{
			echo ":'c";
		}
    }
	
	public function NewTraining($data)
	{
		$this->load->model('TrainingsModel');
		if($this->TrainingsModel->NewTraining($data))
		{
			//success view
		}
		else
		{
			//Error messesage view
		}
	}
	
	public function UpdateTraining($id,$data)
	{
		$this->load->model('TrainingsModel');
		if($this->TrainingsModel->UpdateTraining($id,$data))
		{
			//success view
		}
		else
		{
			//Error messesage view
		}
	}
	
	public function AddPersonTraining($data)
	{
		$this->load->model('TrainingsModel');
		if($this->TrainingsModel->AddPersonTraining($data))
		{
			//success view
		}
		else
		{
			//Error messesage view
		}
	}
	
	public function UpdatePersonTraining($id,$data)
	{
		$this->load->model('TrainingsModel');
		if($this->TrainingsModel->UpdatePersonTraining($id,$data))
		{
			//success view
		}
		else
		{
			//Error messesage view
		}
	}
	
	public function DeletePersonTraining($id)
	{
		$this->load->model('TrainingsModel');
		if($this->TrainingsModel->DeletePersonTraining($data))
		{
			//success view
		}
		else
		{
			//Error messesage view
		}}
	public function index() {
		$this->load->view("components/LoaderComponent");
		$this->load->view("components/HeaderComponent");
		$this->load->view("components/NavbarComponent");
		$this->load->view("TrainingsView");		
		$this->load->view("components/FooterComponent");
	}
}
//     public function index() {
//         $this->load->model('TrainingsModel');
		

//         if($this->TrainingsModel->DeleteTraining(2))
// 		{
// 			echo "yeah";
// 		}
// 		else
// 		{
// 			echo ":'c";
// 		}
//     }
	
// 	public function NewTraining($data)
// 	{
// 		$this->load->model('TrainingsModel');
// 		if($this->TrainingsModel->NewTraining($data))
// 		{
// 			//success view
// 		}
// 		else
// 		{
// 			//Error messesage view
// 		}
// 	}
	
// 	public function UpdateTraining($id,$data)
// 	{
// 		$this->load->model('TrainingsModel');
// 		if($this->TrainingsModel->UpdateTraining($id,$data))
// 		{
// 			//success view
// 		}
// 		else
// 		{
// 			//Error messesage view
// 		}
// 	}
	
// 	public function AddPersonTraining($data)
// 	{
// 		$this->load->model('TrainingsModel');
// 		if($this->TrainingsModel->AddPersonTraining($data))
// 		{
// 			//success view
// 		}
// 		else
// 		{
// 			//Error messesage view
// 		}
// 	}
	
// 	public function UpdatePersonTraining($id,$data)
// 	{
// 		$this->load->model('TrainingsModel');
// 		if($this->TrainingsModel->UpdatePersonTraining($id,$data))
// 		{
// 			//success view
// 		}
// 		else
// 		{
// 			//Error messesage view
// 		}
// 	}
	
// 	public function DeletePersonTraining($id)
// 	{
// 		$this->load->model('TrainingsModel');
// 		if($this->TrainingsModel->DeletePersonTraining($data))
// 		{
// 			//success view
// 		}
// 		else
// 		{
// 			//Error messesage view
// 		}
// 	}
// }