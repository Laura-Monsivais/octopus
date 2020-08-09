<?php
if (!defined("BASEPATH")) exit("No direct script access allowed");

class ServiceModel extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function selectAllServices() {
        $this->db->select('*');
        $this->db->from('servicio s');
        $this->db->join('personal p', 's.id_personal = p.id_personal');
        $query = $this->db->get();

        return $query->result_array();
    }

    public function selectAllPersonal() {
        $query = $this->db->query("SELECT id_personal, nombre, apellido_paterno, apellido_materno FROM personal");

        return $query->result_array();
    }

    public function addService($tipo,$fecha_emision,$fecha_expiracion,$costo,$tipo_pago,$pendiente,$id_personal){
        $query = $this->db->query("INSERT INTO servicio VALUES(NULL,'$tipo','$fecha_emision','$fecha_expiracion','$costo','$tipo_pago','$pendiente','$id_personal')");

        $result = $query;
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function removeService($id_servicio){
        $this->db->where('id_servicio', $id_servicio);
        $result = $this->db->delete('servicio');
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function modifyServicePayment($id_servicio,$data) {
        $this->db->where('id_servicio', $id_servicio);
        $result = $this->db->update('servicio', $data);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function modifyService($id_servicio,$data) {
        $this->db->where('id_servicio', $id_servicio);
        $result = $this->db->update('servicio', $data);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getServiceForModify($id_servicio) {
       $query = $this->db->query("SELECT * FROM servicio WHERE id_servicio = {$id_servicio}");
        return $query->row();
    }

}
