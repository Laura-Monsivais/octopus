<?php defined('BASEPATH') OR exit('No direct script access allowed');

class AssistanceModel extends CI_Model {

    public function addAssistanceInfoToPerson($schedule, $date, 
        $notAssist, $note, $idPerson) {
        $data = array("horario" => $schedule, "fecha" => $date, 
        "falto" => $notAssist, "nota" => $note, "id_personal" => $idPerson);
        $this->db->insert("asistencia", $data);       
    }
}