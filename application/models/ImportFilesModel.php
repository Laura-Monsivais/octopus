<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ImportFilesModel extends CI_Model {

    public function construct() {
        parent::__construct();
    }
    
    //FUNCIÓN PARA INSERTAR LOS DATOS DE LA IMAGEN SUBIDA
    function subir($titulo,$imagen,$categoria)
    {
        $data = array(
            'nombre_archivo' => $titulo,
			'ruta' => $imagen,
			'categoria' => $categoria
        );
        return $this->db->insert('archivos', $data);
    }
}
	//	return $this->db->insert('pagos', $data) && $this->db->insert('contratos', $data);

