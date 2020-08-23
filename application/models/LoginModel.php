<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

    private $_username;
    private $_password;

    public function getUsername() {
        return $this->_username;
    } 

    public function setUsername($username) {
        $this->_username = $username;
    } 

    public function getPassword() {
        return $this->_password;
    } 

    public function setPassword($password) {
        $this->_password = $password;
    } 

    public function collectFormData($username, $password) {
        $this->setUsername($username);
        $this->setPassword($password);
        return $this->processingLogin();
    }

    private function processingLogin() {
        $username = $this->getUsername();
        $password = $this->getPassword();
        $usersExisting = $this->db->get_where("personal", array("usuario" => $username))->result_array();
        if (count($usersExisting) > 0) { 
            foreach ($usersExisting as $userExisting) {
                return password_verify($password, $userExisting["contrasena"]) ? true : false;
            }
        }
    }
}
