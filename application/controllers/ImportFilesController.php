<?php
defined("BASEPATH") OR exit("No direct script access allowed");
class ImportFilesController extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('ImportFilesModel');
		$this->load->helper('download');
		if (!$this->session->userdata('usuario')) {
            redirect('MainController');
        }
	}
	

	public function index(){
		$data['error'] = "";
		$data['errorArch'] = "";
		$data['estado'] = "";
        $data['archivo'] = "";
		$this->load->view("components/LoaderComponent");
		$this->load->view("components/HeaderComponent");
		$this->load->view("components/NavbarComponent");
		$this->load->view("ImportFilesView",$data);
		$this->load->view("components/FooterComponent");
	}

    public function subirArchivo(){
		$config['upload_path'] = './uploads/archivos/';
        $config['allowed_types'] = 'pdf|xlsx|doc';
        $config['max_size'] = '20048';

        $this->load->library('upload',$config);

        if (!$this->upload->do_upload("fileImagen")) {
            $data['errorArch'] = $this->upload->display_errors();
			$this->load->view("components/LoaderComponent");
			$this->load->view("components/HeaderComponent");
			$this->load->view("components/NavbarComponent");
			$this->load->view("ImportFilesView",$data);
			$this->load->view("components/FooterComponent");
        } else {

            $file_info = $this->upload->data();
           
            $titulo = $this->input->post('titImagen');
			$archivo = $file_info['file_name'];
			$categoria = $this->input->post('categoria');
            $subir = $this->ImportFilesModel->subir($titulo,$archivo,$categoria);      
            $data['estado'] = "Archivo subido.";
            $data['archivo'] = $archivo;
			$data['error'] = "";
			$data['errorArch'] = "";
			$this->load->view("components/LoaderComponent");
			$this->load->view("components/HeaderComponent");
			$this->load->view("components/NavbarComponent");
			$this->load->view("ImportFilesView",$data);
			$this->load->view("components/FooterComponent");
            
        }
    }

}
