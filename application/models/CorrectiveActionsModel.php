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
        $date = '2020/08/27';
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

        /*public function setAcciones($desc, $accion, $c_existente, $v_ctrl, $monitoreo, $problema, $com_proceso, $recolec, $analizar, $pcausa, $vcausa, $sol_imple, $impl_sol, $eval_efe, $estbl_cambio, $aprend, $validado) {
        $data = array("desc_no_conf" => $desc, "descripcion" => $desc, "marca" => $marca, "modelo" => $modelo, 
        "costo" => $costo, "stock" => $stock, "fecha_adquisicion" => $fechaA, "matenimiento" => $mttoTF, "id_personal" => $idperson );
        return $this->db->insert("equipo", $data);
        }
    
        public function selectAllPersonal() {
            $query = $this->db->query("SELECT id_personal, nombre, apellido_paterno, apellido_materno FROM personal");
    
            return $query->result_array();
        }
        public function EquipmentPersonal() {
            $this->db->select('*');
            $this->db->from('equipo e');
            $this->db->join('personal p', 'e.id_personal = p.id_personal');
            $query = $this->db->get();
    
            return $query->result_array();
        }
        
        public function EquipmentMantenimiento() {
            $this->db->select('*');
            $this->db->from('equipo e');
            $this->db->join('mantenimiento_equipo em', 'em.id_equipo = p.id_equipo');
            $query = $this->db->get();
    
            return $query->result_array();
        }
    
        public function ListoMantenimiento($id_equipo,$data) {
            $this->db->where('id_equipo', $id_equipo);
            $result = $this->db->update('equipo', $data);
            if ($result) {
                return true;
            } else {
                return false;
            }
        }
        
        public function UpdateEquipment($id_equipo,$data) {
            $this->db->where('id_equipo', $id_equipo);
            $result = $this->db->update('equipo', $data);
            if ($result) {
                return true;
            } else {
                return false;
            }
        }
        public function getEquipmentForModify($id_equipo) {
            $query = $this->db->query("SELECT * FROM equipo WHERE id_equipo= {$id_equipo}");
             return $query->row();
         }
    
         public function DeleteEquipment($id_equipo){
            $this->db->where('id_equipo', $id_equipo);
            $result = $this->db->delete('equipo');
            if ($result) {
                return true;
            } else {
                return false;
            }
        }
        public function ModifyMtto($idEquipo,$data) {
            $this->db->where('id_equipo', $idEquipo);
            $result = $this->db->update('equipo', $data);
            if ($result) {
                return true;
            } else {
                return false;
            }
        }*/

    }