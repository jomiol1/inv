<?php
  include 'ChromePhp.php';
  ChromePhp::log('Consola ChromePhp!');
  $page_title = 'Calcular Porcentaje Mes';
  require_once('includes/load.php');
?>

<?php
  $inicial_adicion=TotalInicialAdicion();
  if(isset($_POST['calc'])){
      /*Trae los datos del mes de calc_porc.php*/
      $date    = make_date();
      $p_mes_id = remove_junk($db->escape($_POST['mes']));
      /*Por el id del mes trae los datos del mes correspondiente*/
      $mes_porc = find_by_id_par('perc_mes',$p_mes_id,'id');
      /*Saca los datos del mes como el porcentaje correspondiente*/
      foreach ($mes_porc as $mes_porc_porc):
        $mes_porc_porc_porc=0;
        $mes_porc_porc_porc=remove_junk($mes_porc_porc['perc_mes_value']);
        $mes_porc_porc_porc_bk=$mes_porc_porc_porc;
      endforeach;
      /*Trae de la inversion inicial y las adiciones realizadas por el cliente totales  */
      foreach ($inicial_adicion as $inicial_adicion_ad):
        $total_porc_mes=0;
        $total_porc_mes=$inicial_adicion_ad['total'];
        //Esto solo es para el mes de febrero que es de 28 dias,
        //$total_porc_mes= $total_porc_mes/30*28;
        $porc_fijo_mes=$inicial_adicion_ad['inv_perc_perm'];
        $porc_fijo=$inicial_adicion_ad['porc_fijo'];
        /*Verifica si elporcentaje es fijo o es el del mes*/
        if ($porc_fijo_mes != 0){
          $mes_porc_porc_porc_bk=$porc_fijo_mes/100;
        }else{
          $mes_porc_porc_porc_bk=$mes_porc_porc_porc;
        }

        $total_porc_mes_tot=0;
        $total_porc_mes_tot=$total_porc_mes*$mes_porc_porc_porc_bk;

        /*Verifica si se paga el 100% o retira solo un porcentaje*/
        if ($porc_fijo == 100){
          $query  = "INSERT INTO inv_rendi (";
          $query .="inv_rendi_value,inv_rendi_date,investor_id,per_mes_id";
          $query .=") VALUES (";
          $query .="'{$total_porc_mes_tot}', '{$date}', '{$inicial_adicion_ad['id']}', '{$p_mes_id}'"; 
          $query .=")";
          if($db->query($query)){
            $session->msg('s',"Acción Realizada Exitosamente. ");         
          } else {
            $session->msg('d',' Lo siento, Algo Falló.');
          }
        }else{
        
          $porc_fijo_bk=100-$porc_fijo;
          $porc_fijo_bk=$porc_fijo_bk/100;
        
          $total_porc_mes_tot_bk=($total_porc_mes_tot*$porc_fijo_bk)*-1;
        
          $query  = "INSERT INTO inv_rendi (";
          $query .="inv_rendi_value,inv_rendi_date,investor_id,per_mes_id";
          $query .=") VALUES (";
          $query .="'{$total_porc_mes_tot_bk}', '{$date}', '{$inicial_adicion_ad['id']}', '{$p_mes_id}'"; 
          $query .=")";
          if($db->query($query)){
          $session->msg('s',"Acción Realizada Exitosamente. ");         
          } else {
          $session->msg('d',' Lo siento, Algo Falló.');
          }
          $porc_fijo=$porc_fijo/100;
          $total_porc_mes_tot_bk=$total_porc_mes_tot*$porc_fijo;
          $query2  = "INSERT INTO inv_rendi (";
          $query2 .="inv_rendi_value,inv_rendi_date,investor_id,per_mes_id";
          $query2 .=") VALUES (";
          $query2 .="'{$total_porc_mes_tot_bk}', '{$date}', '{$inicial_adicion_ad['id']}', '{$p_mes_id}'"; 
          $query2 .=")";
          if($db->query($query2)){
          $session->msg('s',"Acción Realizada Exitosamente. ");         
          } else {
          $session->msg('d',' Lo siento, Algo Falló.');
          }
        }
        
        
      endforeach;
      redirect('calc_porc.php', false);
      /*
      $url='calc_porc.php';
      echo '<meta http-equiv=refresh content="1; '.$url.'">';
      die;*/
 }
?>