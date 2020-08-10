<?php defined('BASEPATH') OR exit('No direct script access allowed');

class NotificationModel extends CI_Model {

    function __construct() {
		parent::__construct();
		$this->load->model("PersonalModel");
	}

    public function detonateAssistanceNotification($assistence, $idPerson) {
        if ($assistence) {
            $personInfo = $this->PersonalModel->queryPersonalById($idPerson);
            $assistanceNotificationDescription = "La empleado " . $personInfo[0]["nombre"] . " " 
                .  $personInfo[0]["apellido_paterno"] . " " .  $personInfo[0]["apellido_materno"] . " no asistió en día de hoy, 
                 su número de teléfono es " .  $personInfo[0]["telefono"] . " para contactarlo";
            $data = array("descripcion" => $assistanceNotificationDescription);
            $this->db->insert("notificación", $data); 
        }
    }

    public function queryAllNotification() { 
        return $this->db->query("SELECT * FROM notificacion")->result_array();
    }

    public function countAllNotification() { 
        $array = $this->db->query("SELECT * FROM notificacion")->result_array();
        return count($array);
    }
}
