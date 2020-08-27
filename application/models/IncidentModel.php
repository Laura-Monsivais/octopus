<?php defined('BASEPATH') OR exit('No direct script access allowed');

class IncidentModel extends CI_Model {

    public function incidentes() {
        return $this->db->query("SELECT * FROM incidentes")->result_array();
    }
}
