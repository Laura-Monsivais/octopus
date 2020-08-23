<?php

/***************************
  Sample using a PHP array
****************************/

require('fpdm.php');

$fields = array(
    'fecha' => '2020-08-23',
    'incidencia' => 'Se suelta un caballo',
    'medida_correctora' => 'Laura corretea al caballo y lo atrapa',
    'responsable' => 'José Guadalupe'
);

$pdf = new FPDM('incidente.pdf');
$pdf->Load($fields, true); // second parameter: false if field values are in ISO-8859-1, true if UTF-8
$pdf->Merge();
$pdf->Output();

?>