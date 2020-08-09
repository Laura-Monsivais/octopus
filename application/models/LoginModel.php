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
        $query = "SELECT contrasena FROM personal WHERE usuario = ? LIMIT 1"; 
        $userHash = $this->db->query($query, $username)->result_array();
        if (password_verify($password, $userHash[0]["contrasena"])) {
            return true;
        } else {
            return false;
        }
    }
}
