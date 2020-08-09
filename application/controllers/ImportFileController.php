<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class ImportFileController extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model("ImportFileModel");
	}
	
	public function index() {
		$data = array(
			"listaArchivos" => $this->ImportFileModel->obtenerArchivos()
		);
		$this->load->view("components/LoaderComponent");
		$this->load->view("components/HeaderComponent");
		$this->load->view("components/NavbarComponent");
		$this->load->view("ImportFileView", $data);
		$this->load->view("components/FooterComponent");
	}

    public function subirArchivo() {
        $path = $config['upload_path'] = './uploads/archivos/';
		$this->verificarRutaExistente($path);
		$config['allowed_types'] = 'pdf|xlsx|docx|pptx';
        $config['max_size'] = '20048';
        $this->load->library('upload', $config);
 
		$titulo = $this->input->post('titImagen');
		$categoria = $this->input->post('categoria');
		if ($titulo =! null and $categoria != null) {
        	if ($this->upload->do_upload("fileImagen")) {
				$file_info = $this->upload->data();
				$archivo = $file_info['file_name'];
				$subir = $this->ImportFileModel->subir($titulo, $archivo, $categoria);      
			}
		}
		redirect("ImportFileController");
    }

	public function descargarArchivo($rutaArchivo) {
		$data = file_get_contents('./uploads/archivos/'.$rutaArchivo); 
		force_download($rutaArchivo, $data);
		redirect("ImportFileController");
	}

	public function eliminarArchivoActual($idArchivo) {
		$this->ImportFileModel->eliminarArchivo($idArchivo); 
		redirect("ImportFileController");
	}

	private function verificarRutaExistente($path) {
		if (!file_exists($path)) {
			mkdir($path, 0777, true);
		}		
	}
}