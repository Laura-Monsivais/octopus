<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StaffModel extends CI_Model {
    private $id_personal;
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

    public function getStaff($id_personal) {
        $staff = $this->db->get_where("personal", string("id_personal" -> $id_personal));
        return $staff;
    }
    public function setStaff($name,$last_name,$mother_last_name,$age,$birth_date,$RFC,$in_date,$egress_date,$user,$password,
    $phone_number,$street,$fractionation,$postal_code,$number,$country,$experience,$status,$creation_date,$update_date) {
        $data = array("id_personal" => null,
        "nombre" => $name,
        "apellido_paterno" => $last_name,
        "apellido_materno" => $mother_last_name,
        "edad" => $age,
        "fecha_nacimiento" => $birth_date,
        "RFC" => $RFC,
        "fecha_ingreso" => $in_date,
        "fecha_egreso" => $egress_date,
        "usuario" => $user,
        "contrasena" => $password,
        "telefono" => $phone_number,
        "calle" => $street,
        "fraccionamiento" => $fractionation,
        "codigo_postal" => $postal_code,
        "numero" => $number,
        "pais" => $country,
        "experiencia" => $experience,
        "estatus" => $status,
        "fecha_creacion" => $creation_date,
        "fecha_actualizacion" => $update_date);

        $this->db->insert("personal", $data);      
    }

    public function queryAllStaffUsers() {
        return $this->db->query("SELECT * FROM personal")->result_array();
    }

    public function deleteStaffUser($id_personal) {
        $this->db->where("id_personal", $id_personal); 
        $this->db->delete("personal"); 
    }
    
    public function getStaffUser($Search) {
        return $this->db->get_where("personal", string("nombre" -> $Search))->result_array();
    }
}