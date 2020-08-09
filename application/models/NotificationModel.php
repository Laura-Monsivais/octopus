<?php defined('BASEPATH') OR exit('No direct script access allowed');

class NotificationModel extends CI_Model {

    private $_notificationDate;
    private $_description;
    private $_idPerson;

    public function getNotificationDate(){
        return $this->_notificationDate;
    }

    public function setNotificationDate($NotificationDate){
        $this->$_notificationDate = $NotificationDate;
        
    }
    
    public function getDescription(){
        return $this->_description;
    }

    public function setDescription($Description){
        $this->$_description = $Description;
    }

    public function getIdPerson(){
        return $this->$_idPerson;
    }

    public function setIdPerson($IdPerson){
        $this->$_idPerson = $IdPerson;
    }

    function __construct() { 
		parent::__construct();
        //$this->load->model("PersonalModel");
        //$this->load->model("CalendarModel");  
    } 
    
    // private function prepareMaintenanceNotification($idEquipment, $maintenanceRequired) {
    //     //$personId = $this->PersonalModel->getPersonaById($personAssign);
    //     if ($maintenanceRequired) {
    //         print_r($maintenanceRequired);
    //     }
    // }

    // public function detonateMaintenanceNotification() {
    //     $this->prepareMaintenanceNotification();
    // }
}
