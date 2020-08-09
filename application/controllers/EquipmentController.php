<?php
defined("BASEPATH") or exit("No direct script access allowed");

class EquipmentController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("EquipmentModel");
	}

	public function index()
	{

		$this->load->view("components/LoaderComponent");
		$this->load->view("components/HeaderComponent");
		$this->load->view("components/NavbarComponent");
		$this->load->view("EquipmentView");
		$this->load->view("components/FooterComponent");
	}

}
