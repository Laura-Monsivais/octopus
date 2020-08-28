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
        $datos = $this->input->post();
        
        $clve_accion_cor = $datos['clve_accion_cor'];
        $v_accion_cor = $datos['v_accion_cor'];
        $fecha_accion_cor = $datos['fecha_accion_cor'];
        $factual_accion_cor = $datos['factual_accion_cor'];
        $desc_no_conf = $datos['desc_no_conf'];
        $accion_realizada = $datos['accion_realizada'];
        $c_existente = $datos['c_existente'];
        $v_ctrl_cyr = $datos['v_ctrl_cyr'];
        $monitoreo = $datos['monitoreo'];
        $problema = $datos['problema'];
        $com_proceso = $datos['com_proceso'];
        $recolec_dato = $datos['recolec_dato'];
        $analizar_dato = $datos['analizar_dato'];
        $posible_causa = $datos['posible_causa'];
        $verif_causa = $datos['verif_causa'];
        $sol_imple = $datos['sol_imple'];
        $impl_sol = $datos['impl_sol'];
        $eval_efe = $datos['eval_efe'];
        $estbl_cambio = $datos['estbl_cambio'];
        $aprend_cierre = $datos['aprend_cierre'];
        $realizado_por = $datos['realizado_por'];
        $validado_por = $datos['validado_por'];

        $this->CorrectiveActionsModel->setAcciones($clve_accion_cor, $v_accion_cor, $fecha_accion_cor, $factual_accion_cor, 
            $desc_no_conf, $accion_realizada, $c_existente,$v_ctrl_cyr, $monitoreo, $problema, $com_proceso, $recolec_dato, 
            $analizar_dato,  $posible_causa, $verif_causa, $sol_imple, $impl_sol, $eval_efe, $estbl_cambio, 
            $aprend_cierre, $realizado_por, $validado_por);
    }

    public function editAction(){
        $datos = $this->input->post();
        
        $id_accion_cor = $datos['id_accion_cor'];
        $factual_accion_cor = $datos['factual_accion_cor'];
        $desc_no_conf = $datos['desc_no_conf'];
        $accion_realizada = $datos['accion_realizada'];
        $c_existente = $datos['c_existente'];
        $v_ctrl_cyr = $datos['v_ctrl_cyr'];
        $monitoreo = $datos['monitoreo'];
        $problema = $datos['problema'];
        $com_proceso = $datos['com_proceso'];
        $recolec_dato = $datos['recolec_dato'];
        $analizar_dato = $datos['analizar_dato'];
        $posible_causa = $datos['posible_causa'];
        $verif_causa = $datos['verif_causa'];
        $sol_imple = $datos['sol_imple'];
        $impl_sol = $datos['impl_sol'];
        $eval_efe = $datos['eval_efe'];
        $estbl_cambio = $datos['estbl_cambio'];
        $aprend_cierre = $datos['aprend_cierre'];
        $realizado_por = $datos['realizado_por'];
        $validado_por = $datos['validado_por'];

        $this->CorrectiveActionsModel->editAcciones($id_accion_cor, $factual_accion_cor,$desc_no_conf, $accion_realizada, 
            $c_existente, $v_ctrl_cyr, $monitoreo, $problema, $com_proceso, $recolec_dato, $analizar_dato, 
            $posible_causa, $verif_causa, $sol_imple, $impl_sol, $eval_efe, $estbl_cambio, $aprend_cierre,
            $realizado_por, $validado_por);

        
    }
}