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


    public function getIdProvider() {
        return $this->$_idProvider;
    } 

    public function setIdProvider($idProvider) {
        $this->_idProvider = $idProvider;
    } 

    public function getName() {
        return $this->$_name;
    } 

    public function setName($name) {
        $this->_name = $name;
    }

    public function getType() {
        return $this->$_type;
    } 

    public function setType($type) {
        $this->_type = $type;
    } 

    public function getPreferential() {
        return $this->$_preferential;
    } 

    public function setPreferential($preferential) {
        $this->_preferential = $preferential;
    } 

    public function getPhone() {
        return $this->$_phone;
    } 

    public function setPhone($phone) {
        $this->_phone = $phone;
    } 

    public function getAddress() {
        return $this->$_address;
    } 

    public function setAddress($address) {
        $this->_address = $address;
    } 

    public function getEmail() {
        return $this->$_email;
    } 

    public function setEmail($email) {
        $this->_email = $email;
    } 

    public function getStatus() {
        return $this->$_status;
    } 

    public function setStatus($status) {
        $this->_status = $status;
    } 

    public function getCreateTime() {
        return $this->$_createTime;
    } 

    public function setCreateTime($createTime) {
        $this->_createTime = $createTime;
    } 

    public function getUpdateTime() {
        return $this->$_updateTime;
    } 

    public function setUpdateTime($updateTime) {
        $this->_updateTime = $updateTime;
    } 

    public function getIdPersonal() {
        return $this->$_idPersonal;
    } 

    public function setIdPersonal($idPersonal) {
        $this->_idPersonal = $idPersonal;
    } 

    public function getProvider($idProvider){
        $provider = $this->db->get_where("proveedor", string("id_proveedor" => $idProvider));
        $_idProvider = $idProvider["id_proveedor"];
        $_name = $idProvider["nombre"];
        $_type = $idProvider["tipo"];
        $_preferential = $idProvider["preferente"];
        $_phone = $idProvider["telefono"];
        $_address = $idProvider["direccion"];
        $_email = $idProvider["correo"];
        $_status = $idProvider["estatus"];
        $_createTime = $idProvider["fecha_creacion"];
        $_updateTime = $idProvider["fecha_actualizacion"];
        $_idPersonal = $idProvider["id_personal"];
    }
}