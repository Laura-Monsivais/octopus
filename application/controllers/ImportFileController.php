<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class ImportFileController extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model("ImportFileModel");
	}
	
	public function index($data = "") {
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
        $config['upload_path'] = './uploads/archivos/';
        $config['allowed_types'] = 'pdf|xlsx|docx|pptx';
        $config['max_size'] = '20048';
        $this->load->library('upload', $config);
 
        if (!$this->upload->do_upload("fileImagen")) {
            $data['errorArch'] = $this->upload->display_errors();
            $this->index($data);
        } else {	
			
	     	$titulo = $this->input->post('titImagen');
			$categoria = $this->input->post('categoria');

			if ($titulo =! null or $categoria != null) {
				$file_info = $this->upload->data();
				$archivo = $file_info['file_name'];



				$subir = $this->ImportFileModel->subir($titulo,$archivo,$categoria);      
				$data['estado'] = "Archivo subido.";
				$data['archivo'] = $archivo;
				$data['error'] = "";
				$data['errorArch'] = "";
				$this->index($data);
			}
        }
    }

	public function descargarArchivo($idArchivo) {
		$this->index();
		$data = file_get_contents('./uploads/archivos/'.$idArchivo); 
       force_download($idArchivo,$data);
	}
	
		}
	

