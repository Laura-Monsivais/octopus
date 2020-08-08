<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CalendarModel extends CI_Model {

    private $_event;
    private $_date;
    private $_importantDate;

    public function getEvent() {
        return $this->_event;
    } 

    public function setEvent($event) {
        $this->_event = $event;
    } 

    public function getDate() {
        return $this->_date;
    } 

    public function setDate($date) {
        $this->_date = $date;
    } 

    public function getImportantDate() {
        return $this->_importantDate;
    } 

    public function setImportantDate($importantDate) {
        $this->_importantDate = $importantDate;
    } 

    public function collectFormData($date, $event, $importantDate) {
        $this->setDate($date);
        $this->setEvent($event);
        $this->setImportantDate($importantDate);
        $this->processAddEvent();
    }

    private function processAddEvent() {
        $data = array("fecha" => $this->getDate(), "evento" => $this->getEvent(), 
        "fecha_importe" => $this->getImportantDate());
        $this->db->insert("calendario", $data);       
    }

    public function queryAllEvents() {
        return $this->db->query("SELECT * FROM calendario")->result_array();
    }

    public function queryAllPersons() {
        return $this->db->query("SELECT id_personal, nombre FROM personal")->result_array();
    }

    public function deleteEvent($idEvent) {
        $this->db->where("id_calendario", $idEvent); 
        $this->db->delete("calendario"); 
	}
}