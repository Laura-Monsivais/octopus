<?php
if (!defined("BASEPATH")) exit("No direct script access allowed");

class MaintenanceModel extends CI_Model {
	public function __construct(){
		$this->load->database();
	}
	public function add($mantenimiento){

  $this->db->insert('mantenimiento', $mantenimiento);
}
}
  
    
	
	


