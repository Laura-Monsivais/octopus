<?php
if (!defined("BASEPATH")) exit("No direct script access allowed");

class ImportFileModel extends CI_Model {

    function subir($titulo, $imagen, $categoria) {
        $data = array("nombre_archivo" => $titulo, "ruta" => $imagen, "categoria" => $categoria);
        return $this->db->insert("archivo", $data);
    }

    public function obtenerArchivos() {
        return $this->db->query("SELECT * FROM archivo")->result_array();
    }
    
    public function eliminarArchivo($idArchivo) {
        $this->db->where("id_archivo", $idArchivo); 
        $this->db->delete("archivo"); 
	}
}
