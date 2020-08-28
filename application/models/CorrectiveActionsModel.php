<?php
if (!defined("BASEPATH")) exit("No direct script access allowed");

class CorrectiveActionsModel extends CI_Model {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
    }

    public function getAcciones()
	{
		return $this->db->query("SELECT * FROM acciones_correctivas")->result_array();
    }

    public function getPersonal()
	{
		return $this->db->query("SELECT * FROM personal")->result_array();
    }
    
    public function getUser()
	{
        $usuario = $this->session->userdata("usuario");
		return $this->db->query("SELECT * FROM personal WHERE nombre = '".$usuario."'")->result_array();
    }

    public function setAcciones($desc_no_conf, $accion_realizada, $c_existente, 
    $v_ctrl_cyr, $monitoreo, $problema, $com_proceso, $recolec_dato, $analizar_dato, 
    $posible_causa, $verif_causa, $sol_imple, $impl_sol, $eval_efe, $estbl_cambio, 
    $aprend_cierre, $realizado_por, $validado_por){
        $date = date('Y/m/d');
        return $this->db->query("INSERT INTO `acciones_correctivas`(`clve_accion_cor`, 
            `v_accion_cor`, `fecha_accion_cor`, `factual_accion_cor`, `desc_no_conf`, 
            `accion_realizada`, `c_existente`, `v_ctrl_cyr`, `monitoreo`, `problema`, 
            `com_proceso`, `recolec_dato`, `analizar_dato`, `posible_causa`, `verif_causa`, 
            `sol_imple`, `impl_sol`, `eval_efe`, `estbl_cambio`, `aprend_cierre`, `realizado_por`, 
            `id_personal`) VALUES ('R-AC-002', '2', '$date', '$date', '$desc_no_conf', '$accion_realizada', '$c_existente',
            '$v_ctrl_cyr', '$monitoreo', '$problema', '$com_proceso', '$recolec_dato', '$analizar_dato',
            '$posible_causa', '$verif_causa', '$sol_imple', '$impl_sol', '$eval_efe', '$estbl_cambio', '$aprend_cierre', 
            '$realizado_por', 1)");
    }

    }