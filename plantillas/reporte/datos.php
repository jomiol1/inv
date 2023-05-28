<?php
  require_once('includes/load.php');
  $inv_ini = find_by_id_par('inv_ini',$_GET['id'],'inv_id');  
  $add_inv = find_by_id_par('add_inv',(int)$_GET['id'],'investor_id');
  $inv_rendi = find_by_id_par('inv_rendi',(int)$_GET['id'],'investor_id');
  $inv_cap_reti = find_by_id_par('ret_cap',(int)$_GET['id'],'investor_id');
  $investor = find_by_id_par('investors',(int)$_GET['id'],'id');
  $reinversion=TotalReinversion((int)$_GET['id']);
  $all_investor = find_all('investors');
  /*var_dump($inv_ini);*/
      
  /*foreach ($inv_ini as $inv_ini_ini):

    echo asDollars(remove_junk($inv_ini_ini['inv_ini_value']));
    echo remove_junk($inv_ini_ini['inv_ini_date']);

  endforeach; */
?>