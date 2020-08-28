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

    public function setAcciones($clve_accion_cor, $v_accion_cor, $fecha_accion_cor,
    $factual_accion_cor, $desc_no_conf, $accion_realizada, $c_existente, 
    $v_ctrl_cyr, $monitoreo, $problema, $com_proceso, $recolec_dato, $analizar_dato, 
    $posible_causa, $verif_causa, $sol_imple, $impl_sol, $eval_efe, $estbl_cambio, 
    $aprend_cierre, $realizado_por, $validado_por){
        return $this->db->query("INSERT INTO `acciones_correctivas`(`clve_accion_cor`, 
            `v_accion_cor`, `fecha_accion_cor`, `factual_accion_cor`, `desc_no_conf`, 
            `accion_realizada`, `c_existente`, `v_ctrl_cyr`, `monitoreo`, `problema`, 
            `com_proceso`, `recolec_dato`, `analizar_dato`, `posible_causa`, `verif_causa`, 
            `sol_imple`, `impl_sol`, `eval_efe`, `estbl_cambio`, `aprend_cierre`, `realizado_por`, 
            `id_personal`) VALUES ('$clve_accion_cor', '$v_accion_cor', '$fecha_accion_cor', '$factual_accion_cor', '$desc_no_conf', 
            '$accion_realizada', '$c_existente','$v_ctrl_cyr', '$monitoreo', '$problema', '$com_proceso', '$recolec_dato', '$analizar_dato',
            '$posible_causa', '$verif_causa', '$sol_imple', '$impl_sol', '$eval_efe', '$estbl_cambio', '$aprend_cierre', 
            '$realizado_por', $validado_por)");
    }

    public function editAcciones($id_accion_cor, $factual_accion_cor, $desc_no_conf, $accion_realizada, $c_existente, 
    $v_ctrl_cyr, $monitoreo, $problema, $com_proceso, $recolec_dato, $analizar_dato, 
    $posible_causa, $verif_causa, $sol_imple, $impl_sol, $eval_efe, $estbl_cambio, 
    $aprend_cierre, $realizado_por, $validado_por){
        return $this->db->query("UPDATE `acciones_correctivas` SET `factual_accion_cor`= '$factual_accion_cor',`desc_no_conf`='$desc_no_conf',
        `accion_realizada`='$accion_realizada',`c_existente`='$c_existente',`v_ctrl_cyr`='$v_ctrl_cyr',
        `monitoreo`='$monitoreo',`problema`='$problema',`com_proceso`='$com_proceso',`recolec_dato`='$recolec_dato',
        `analizar_dato`='$analizar_dato',`posible_causa`='$posible_causa',`verif_causa`='$verif_causa',`sol_imple`='$sol_imple',
        `impl_sol`='$impl_sol',`eval_efe`='$eval_efe',`estbl_cambio`='$estbl_cambio',`aprend_cierre`='$aprend_cierre',
        `realizado_por`='$realizado_por',`id_personal`=$validado_por WHERE id_accion_cor = $id_accion_cor");
    }

    public function deleteAcciones($id_accion_cor){
        $this->db->where('id_accion_cor', $id_accion_cor);
        $result = $this->db->delete('acciones_correctivas');
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

}