<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class ServiceModel extends CI_Model {

	private $_type;
    private $_emission_date;
    private $_expiration_date;
    private $_cost;
    private $_payment_type;
    private $_pending;
    private $_id_personal;

    public function getType() {
        return $this->_type;
    } 

    public function setType($type) {
        $this->_type = $type;
    } 

    public function getEmissionDate() {
        return $this->_emission_date;
    } 

    public function setEmissionDate($emission_date) {
        $this->_emission_date = $emission_date;
    } 

    public function getExpirationDate() {
        return $this->_expiration_date;
    } 

    public function setExpirationDate($expiration_date) {
        $this->_expiration_date = $expiration_date;
    } 

    public function getCost() {
        return $this->_cost;
    } 

    public function setCost($cost) {
        $this->_cost = $cost;
    } 

    public function getPaymentType() {
        return $this->_payment_type;
    } 

    public function setPaymentType($payment_type) {
        $this->_payment_type = $payment_type;
    }

    public function getPending() {
        return $this->_pending;
    } 

    public function setPending($pending) {
        $this->_pending = $pending;
    }

    public function getIdPersonal() {
        return $this->_id_personal;
    } 

    public function setIdPersonal($id_personal) {
        $this->_id_personal = $id_personal;
    }

    public function selectAllServices() {
        $query = $this->db->query("SELECT * FROM servicio");

        return $query->result();
    }

    public function addService($tipo,$fecha_emision,$fecha_expiracion,$costo,$tipo_pago,$pendiente,$id_personal){
        $query = $this->db->query("INSERT INTO usuarios VALUES(NULL,'$tipo','$fecha_emision','$fecha_expiracion','$costo','$tipo_pago','$pendiente','$id_personal');");
        if($query == true){
          return true;
        }else{
            return false;
        }

    }





}