<?php
include 'ChromePhp.php';
ChromePhp::log('Consola ChromePhp!');
  $page_title = 'Contrato Inversionista';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(3);

  setlocale(LC_MONETARY,"es_CO");

  $inv_ini = find_by_id_contrat('pdf',(int)$_GET['id'],'id',$_GET['tipo']);  

  if(!$inv_ini){
    $session->msg("d","no tiene contratos cargados.");
    $session->msg("d", $errors);
    //redirect('product.php');
  }else{             
    foreach ($inv_ini as $inv_ini_ini):
      if (empty($inv_ini_ini['ruta'])) {
        $session->msg("d","no tiene contratos cargados .");
        $session->msg("d", $errors);
        redirect('product.php');
      }else{
        if($inv_ini_ini['tipo']==='inv'){
          $inv_ruta = 'contratos/'.remove_junk($inv_ini_ini['ruta']);
        }else{
          $inv_ruta = 'reinversion/'.remove_junk($inv_ini_ini['ruta']);
        }
        $mi_pdf = $inv_ruta;
        header('Content-type: application/pdf');
        header('Content-Disposition: inline; filename="'.$mi_pdf.'"');
        readfile($mi_pdf);  
      }
    endforeach;
 
  }
 
?>

