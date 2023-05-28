<?php

use Mpdf\Mpdf;

require_once('vendor/autoload.php');
require_once('plantillas/reporte/plantilla.php');
require_once('plantillas/reporte/datos.php');

$css = file_get_contents('plantillas/reporte/style.css');


//$mpdf = new \Mpdf\Mpdf([]);
//$mpdf = new \Mpdf\Mpdf(['utf-8', 'A4-L']);
$mpdf = new Mpdf();
$plantilla=getPlantillas($inv_ini,$add_inv,$inv_rendi,$inv_cap_reti,$investor,$reinversion);
try{
  $mpdf->writeHtml($css, \Mpdf\HTMLParserMode::HEADER_CSS);
  $mpdf->writeHtml($plantilla, \Mpdf\HTMLParserMode::HTML_BODY);
}catch (Exception $e) {
  echo $e;
}

foreach($investor as $investor_p){
  $p_plantilla=$investor_p["inv_name"]." ".$investor_p["inv_last_name"];
}

//$mpdf->Output($p_plantilla.'.pdf','D');


$mpdf->Output($p_plantilla.'.pdf', 'D'); //guarda a ruta
//$mpdf->Output('Reporte.pdf','I'); //muestra a usuario
//$mpdf->Output('Reporte.pdf','D'); //descargar directamente