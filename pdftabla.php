<?php

use Mpdf\Mpdf;

require_once('vendor/autoload.php');
require_once('plantillas/reporte/plantillatabla.php');
require_once('plantillas/reporte/datostabla.php');

$css = file_get_contents('plantillas/reporte/style.css');


//$mpdf = new \Mpdf\Mpdf([]);
//$mpdf = new \Mpdf\Mpdf(['utf-8', 'A4-L']);
//$mpdf = new Mpdf();
$mpdf = new Mpdf(['orientation' => 'L']);
$plantilla=getPlantillas($products);
try{
  $mpdf->writeHtml($css, \Mpdf\HTMLParserMode::HEADER_CSS);
  $mpdf->writeHtml($plantilla, \Mpdf\HTMLParserMode::HTML_BODY);
}catch (Exception $e) {
  echo $e;
}

/*foreach($products as $investor_p){
  $p_plantilla=$investor_p["inv_name"]." ".$investor_p["inv_last_name"];
}*/

//$mpdf->Output($p_plantilla.'.pdf','D');


$mpdf->Output('ReporteInversionistas.pdf', 'D'); //guarda a ruta
//$mpdf->Output('Reporte.pdf','I'); //muestra a usuario
//$mpdf->Output('Reporte.pdf','D'); //descargar directamente