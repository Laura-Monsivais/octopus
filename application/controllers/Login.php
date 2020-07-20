<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    /**
     * This method is used to load the login.php view.
     */
	public function index()
	{
		$this->load->view('login');
	}
}
