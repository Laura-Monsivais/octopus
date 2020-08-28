<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CorrectiveActionsController extends CI_Controller {

    function __construct() {
		parent::__construct();
		$this->load->model("CorrectiveActionsModel");
	}

	public function index($data = "") {
        $data = array(
            "versiones" => $this->CorrectiveActionsModel->getAcciones(),
            "personal" => $this->CorrectiveActionsModel->getPersonal(),
            "usuario" => $this->CorrectiveActionsModel->getUser()
        );
		$this->load->view("components/LoaderComponent");
		$this->load->view("components/HeaderComponent");
		$this->load->view("components/NavbarComponent");
		$this->load->view("CorrectiveActionsView", $data);		
		$this->load->view("components/FooterComponent");
    }
    public function addAction(){
        $desc_no_conf = $this->input->post('desc_no_conf', TRUE);
        $accion_realizada = $this->input->post('accion_realizada', TRUE);
        $c_existente = $this->input->post('c_existente', TRUE);
        $v_ctrl_cyr = $this->input->post('v_ctrl_cyr', TRUE);
        $monitoreo = $this->input->post('monitoreo', TRUE);
        $problema = $this->input->post('problema', TRUE);
        $com_proceso = $this->input->post('com_proceso', TRUE);
        $recolec_dato = $this->input->post('recolec_dato', TRUE);
        $analizar_dato = $this->input->post('analizar_dato', TRUE);
        $posible_causa = $this->input->post('posible_causa', TRUE);
        $verif_causa = $this->input->post('verif_causa', TRUE);
        $sol_imple = $this->input->post('sol_imple', TRUE);
        $impl_sol = $this->input->post('impl_sol', TRUE);
        $eval_efe = $this->input->post('eval_efe', TRUE);
        $estbl_cambio = $this->input->post('estbl_cambio', TRUE);
        $aprend_cierre = $this->input->post('aprend_cierre', TRUE);
        $realizado_por = $this->input->post('realizado_por', TRUE);
        $validado_por = $this->input->post('validado_por', TRUE);

        $this->CorrectiveActionsModel->setAcciones($desc_no_conf, $accion_realizada, $c_existente,
            $v_ctrl_cyr, $monitoreo, $problema, $com_proceso, $recolec_dato, $analizar_dato, 
            $posible_causa, $verif_causa, $sol_imple, $sol_imple, $impl_sol, $eval_efe, $estbl_cambio, $aprend_cierre,
            $realizado_por, $validado_por);
    }
}