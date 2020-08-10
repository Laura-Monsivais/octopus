<?php defined('BASEPATH') OR exit('No direct script access allowed');

class NotificationModel extends CI_Model {

    function __construct() {
		parent::__construct();
		$this->load->model("PersonalModel");
	}

    public function detonateAssistanceNotification($assistence, $idPerson) {
        if ($assistence) {
            $personInfo = $this->PersonalModel->queryPersonalById($idPerson);
            $assistanceNotificationDescription = "El empleado " . $personInfo[0]["nombre"] . " " 
                .  $personInfo[0]["apellido_paterno"] . " " .  $personInfo[0]["apellido_materno"] . " no asistió el día de hoy, 
                 su número de teléfono es " .  $personInfo[0]["telefono"] . " para contactarlo.";
            $data = array("descripcion" => $assistanceNotificationDescription);
            $this->db->insert("notificacion", $data); 
        }
    }
    public function detonateBirthdayNotification($idPerson) {
            $personInfo = $this->PersonalModel->queryPersonalById($idPerson);
            $assistanceNotificationDescription = "Hoy es el cumpleaños de  " . $personInfo[0]["nombre"] . " " 
                .  $personInfo[0]["apellido_paterno"] . " " .  $personInfo[0]["apellido_materno"] . ", ¡Felicidades!";
            $data = array("descripcion" => $assistanceNotificationDescription);
                if(!$this->checkForDuplicatedNotifications($assistanceNotificationDescription)){
                    $this->db->insert("notificacion", $data);
                }
    }

    public function queryAllNotification() { 
        return $this->db->query("SELECT * FROM notificacion")->result_array();
    }

    public function countAllNotification() { 
        $array = $this->db->query("SELECT * FROM notificacion")->result_array();
        return count($array);
    }

    public function checkForDuplicatedNotifications($notificationContent){
        $notifications =$this->queryAllNotification();
        foreach($notifications as $notification){
            if($notification["descripcion"] == $notificationContent){
                return true;
            }   
        }
        return false;
    }
}