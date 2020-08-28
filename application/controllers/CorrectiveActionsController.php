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
        
        $desc_no_conf = $datos['input1'];
        $accion_realizada = $datos['input2'];
        $c_existente = $datos['input3'];
        $v_ctrl_cyr = $datos['input4'];
        $monitoreo = $datos['input5'];
        $problema = $datos['input6'];
        $com_proceso = $datos['input7'];
        $recolec_dato = $datos['input8'];
        $analizar_dato = $datos['input9'];
        $posible_causa = $datos['input10'];
        $verif_causa = $datos['input11'];
        $sol_imple = $datos['input12'];
        $impl_sol = $datos['input13'];
        $eval_efe = $datos['input14'];
        $estbl_cambio = $datos['input15'];
        $aprend_cierre = $datos['input16'];
        $realizado_por = $datos['input17'];
        $validado_por = $datos['input18'];

        $this->CorrectiveActionsModel->setAcciones($desc_no_conf, $accion_realizada, $c_existente,
            $v_ctrl_cyr, $monitoreo, $problema, $com_proceso, $recolec_dato, $analizar_dato, 
            $posible_causa, $verif_causa, $sol_imple, $sol_imple, $impl_sol, $eval_efe, $estbl_cambio, $aprend_cierre,
            $realizado_por, $validado_por);

        /*if(isset($datos)){
            $desc_no_conf = $datos['input1'];
            $accion_realizada = $datos['input2'];
            $c_existente = $datos['input3'];
            $v_ctrl_cyr = $datos['input4'];
            $monitoreo = $datos['input5'];
            $problema = $datos['input6'];
            $com_proceso = $datos['input7'];
            $recolec_dato = $datos['input8'];
            $analizar_dato = $datos['input9'];
            $posible_causa = $datos['input10'];
            $verif_causa = $datos['input11'];
            $sol_imple = $datos['input12'];
            $impl_sol = $datos['input13'];
            $eval_efe = $datos['input14'];
            $estbl_cambio = $datos['input15'];
            $aprend_cierre = $datos['input16'];
            $realizado_por = $datos['input17'];
            $validado_por = $datos['input18'];

            $this->CorrectiveActionsModel->setAcciones($desc_no_conf, $accion_realizada, $c_existente,
            $v_ctrl_cyr, $monitoreo, $problema, $com_proceso, $recolec_dato, $analizar_dato, 
            $posible_causa, $verif_causa, $sol_imple, $sol_imple, $impl_sol, $eval_efe, $estbl_cambio, $aprend_cierre,
            $realizado_por, $validado_por);
        }*/
    }
}