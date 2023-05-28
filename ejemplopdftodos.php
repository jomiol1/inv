<?php
  require_once('includes/load.php');  
  require_once('vendor/autoload.php');
  require_once('plantillas/reporte/plantilla.php');

  $css = file_get_contents('plantillas/reporte/style.css');

  $all_investor = find_all('investors');

  $i=1;
  //var_dump($all_investor);

  $array_num = count($all_investor);

  var_dump($array_num);

  /*for ($i = 1; $i < $array_num; $i++){
  echo $i;
  }*/
  
  for ($i = 1; $i < $array_num; $i++){

    $inv_ini = find_by_id_par('inv_ini',$i,'inv_id');  
    $add_inv = find_by_id_par('add_inv',$i,'investor_id');
    $inv_rendi = find_by_id_par('inv_rendi',$i,'investor_id');
    $inv_cap_reti = find_by_id_par('ret_cap',$i,'investor_id');
    $investor = find_by_id_par('investors',$i,'id');
    $reinversion=TotalReinversion($i);
   
    //var_dump($investor);
    $mpdf = new \Mpdf\Mpdf([]);
    $plantilla=getPlantillas($inv_ini,$add_inv,$inv_rendi,$inv_cap_reti,$investor,$reinversion);

    $mpdf->writeHtml($css, \Mpdf\HtmlParserMOde::HEADER_CSS);
    $mpdf->writeHtml($plantilla, \Mpdf\HtmlParserMOde::HTML_BODY);


    foreach($investor as $investor_p){
      $p_nombre=$investor_p["inv_name"]." ".$investor_p["inv_last_name"];
    }

    //$mpdf->Output($p_plantilla.'.pdf','D');
    //$p_nombre="nombre".$i;
    sleep(10);
    $mpdf->Output($p_nombre.'.pdf', 'D'); //guarda a ruta
    //$mpdf->Output('Reporte.pdf','I'); //muestra a usuario
    //$mpdf->Output('Reporte.pdf','D'); //descargar directamente
    //sleep(10);
  }

