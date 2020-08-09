<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProviderModel extends CI_Model {

    private $_idProvider;
    private $_name;
    private $_type;
    private $_preferential;
    private $_phone;
    private $_address;
    private $_email;
    private $_status;
    private $_createTime;
    private $_updateTime;
    private $_idPersonal;

    public function setProvider($Name, $Type, $Preferential, $Phone, $Address, $Email,
    $Status) {
        $data = array("id_proveedor" => null,
        "nombre" => $Name,
        "tipo" => $Type,
        "preferente" => $Preferential,
        "telefono" => $Phone,
        "direccion" => $Address,
        "correo" => $Email,
        "estatus" => $Status,
        "fecha_creacion" => null,
        "fecha_actualizacion" => null,
        "id_personal" => null);
        $this->db->insert("proveedor", $data);      
    }

    public function queryAllProviders() {
        return $this->db->query("SELECT * FROM proveedor")->result_array();
    }

    public function deleteProvider($idProvider) {
        $this->db->where("id_proveedor", $idProvider); 
        $this->db->delete("proveedor"); 
    }

    public function modifyProvider($idProvider,$data) {
        $this->db->where('id_proveedor', $idProvider);
        $result = $this->db->update('proveedor', $data);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getProviderForModify($idProvider) {
       $query = $this->db->query("SELECT * FROM proveedor WHERE id_proveedor = {$idProvider}");
        return $query->row();
    }
}