<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PersonalModel extends CI_Model {

    private $_name;
    private $_last_name;
    private $_mother_last_name;
    private $_age;
    private $_birth_date;
    private $_RFC;
    private $_in_date;
    private $_egress_date;
    private $_user;
    private $_password;
    private $_phone_number;
    private $_street;
    private $_fractionation;
    private $_postal_code;
    private $_number;
    private $_country;
    private $_experience;
    private $_status;
    private $_creation_date;
    private $_update_date;

    public function getName() {
        return $this->_name;
    } 

    public function setName($name) {
        $this->_name = $name;
    } 

    public function getLastName() {
        return $this->_last_name;
    } 

    public function setLastName($lastName) {
        $this->_last_name = $lastName;
    } 

    public function getLastName() {
        return $this->_mother_last_name;
    } 

    public function setLastName($MotherLastName) {
        $this->_mother_last_name = $MotherLastName;
    } 

    public function getAge() {
        return $this->_age;
    } 

    public function setAge($Age) {
        $this->_age = $Age;
    } 

    public function getBirthDate() {
        return $this->_birth_date;
    } 

    public function setBirthDate($BirthDate) {
        $this->_birth_date = $BirthDate;
    } 

    public function getRFC() {
        return $this->_RFC;
    } 

    public function setRFC($RFC) {
        $this->_RFC = $RFC;
    } 

    public function getInDate() {
        return $this->_in_date;
    } 

    public function setInDate($InDate) {
        $this->_in_date = $InDate;
    } 

    public function getInDate() {
        return $this->_in_date;
    } 

    public function setInDate($InDate) {
        $this->_in_date = $InDate;
    } 

    public function getEgressDate() {
        return $this->_egress_date;
    } 

    public function setInDate($EgressDate) {
        $this->_egress_date = $EgressDate;
    } 

    public function getUpdate() {
        return $this->_user;
    } 

    public function setUpdate($Update) {
        $this->_user = $Update;
    }

    public function getPassword() {
        return $this->_password;
    } 

    public function setPassword($Password) {
        $this->_password = $Password;
    }

    public function getPhoneNumber() {
        return $this->_phone_number;
    } 

    public function setPhoneNumber($PhoneNumber) {
        $this->_phone_number = $PhoneNumber;
    }

    public function getStreet() {
        return $this->_street;
    } 

    public function setStreet($Street) {
        $this->_street = $Street;
    }

    public function getFractionation() {
        return $this->_fractionation;
    } 

    public function setFractionation($Fractionation) {
        $this->_fractionation = $Fractionation;
    }

    public function getPostalCode() {
        return $this->_postal_code;
    } 

    public function setPostalCode($PostalCode) {
        $this->_postal_code = $PostalCode;
    }

    public function getNumber() {
        return $this->_number;
    } 

    public function setNumber($Number) {
        $this->_number = $Number;
    }

    public function getCountry() {
        return $this->_country;
    } 

    public function setCountry($Country) {
        $this->_country = $Country;
    }

    public function getExperience() {
        return $this->_experience;
    } 

    public function setExperience($Experience) {
        $this->_experience = $Experience;
    }

    public function getStatus() {
        return $this->_status;
    } 

    public function setStatus($Status) {
        $this->_status = $Status;
    }

    public function getCreationStatus() {
        return $this->_creation_date;
    } 

    public function setCreationStatus($CreationStatus) {
        $this->_creation_date = $CreationStatus;
    }

    public function getUpdateDate() {
        return $this->_update_date;
    } 

    public function setUpdateDate($UpdateDate) {
        $this->_update_date = $UpdateDate;
    }
}