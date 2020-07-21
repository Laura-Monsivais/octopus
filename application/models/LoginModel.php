<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

    private $username;
    private $password:

    public function getUsername() {
        return $this->username;
    } 

    public function setUsername($name) {
        $this->username = $name;
    } 

    public function getPassword() {
        return $this->username;
    } 

    public function getPassword($hash) {
        $this->password = $hash;
    } 

    construct() {}

    public function collectFormData($username, $password) {
        $this->setUsername($username);
        $this->setPassword($password);
    }

    public function initLogin() {
        $username = $this->getUsername();
        $password = $this->getPassword();
        $query = $this->db->query("SELECT * FROM personal WHERE usuario = ? AND contrasena = ? LIMIT 1");
    }
}
