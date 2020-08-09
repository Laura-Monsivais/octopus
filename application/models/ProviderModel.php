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

    public function getProvider($idProvider) {
        $provider = $this->db->get_where("proveedor", string("id_proveedor" -> $idProvider));
        return $provider;
        // $_name = $provider["nombre"];
        // $_type = $provider["tipo"];
        // $_preferential = $provider["preferente"];
        // $_phone = $provider["telefono"];
        // $_address = $provider["direccion"];
        // $_email = $provider["correo"];
        // $_status = $provider["estatus"];
        // $_createTime = $provider["fecha_creacion"];
        // $_updateTime = $provider["fecha_actualizacion"];
        // $_idPersonal = $provider["id_personal"];
    }
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
}