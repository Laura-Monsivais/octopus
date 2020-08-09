<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class TrainingsModel extends CI_Model {

    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function GetTraining($user=0) {
		$this->db->from('personal_capacitacion_personal');
		$this->db->select('*');
		$this->db->join('capacitacion_personal', 'personal_capacitacion_personal.id_capacitacion_personal = capacitacion_personal.id_capacitacion_personal');
		$this->db->join('personal', 'personal_capacitacion_personal.id_personal = personal.id_personal');
		($user!=0) ? $this->db->where('personal_capacitacion_personal.id_personal', $user) : false;
		$query = $this->db->get();
		return $query->result();
    }
	
	public function NewTraining($data)
	{
		if($this->db->insert('capacitacion_personal',$data))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function UpdateTraining($id,$data)
	{
		$this->db->where('id_capacitacion_personal', $id);
		if($this->db->update('capacitacion_personal',$data))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function DeleteTraining($id)
	{
		$this->db->where('id_capacitacion_personal', $id);
		if($this->db->delete('capacitacion_personal'))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function AddPersonTraining($data)
	{
		if($this->db->insert('personal_capacitacion_personal',$data))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function UpdatePersonTraining($id,$data)
	{
		$this->db->where('id_capacitacion_personal', $id);
		if($this->db->update('personal_capacitacion_personal',$data))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function DeletePersonTraining($id)
	{
		$this->db->where('id_personal', $id);
		if($this->db->delete('personal_capacitacion_personal'))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
