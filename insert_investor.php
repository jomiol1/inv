<?php
require_once('includes/load.php');

 if(isset($_POST['add_product'])){
   $user = current_user();
   $user_name=ucfirst($user['name']);
   $user_id=ucfirst($user['id']);
   $req_fields = array('name','last-name','phone', 'email' );
   validate_fields($req_fields);
   if(empty($errors)){

    $date_start=remove_junk($db->escape($_POST['date_start']));
    $fechaComoEntero = strtotime($date_start);
    $anio = date("Y", $fechaComoEntero);
    $mes = date("m", $fechaComoEntero);
    $dia = date("d", $fechaComoEntero);
    $business_days=business_days($anio,$mes,$dia+6);

    $p_nota   = remove_junk($db->escape($_POST['nota']));
    $p_porc_fijo   = remove_junk($db->escape($_POST['porc-value-fijo']));
    $p_porc        = remove_junk($db->escape($_POST['porc-value']));
    $p_cedula      = remove_junk($db->escape($_POST['cedula']));
    $p_name        = remove_junk($db->escape($_POST['name']));
    $p_last_name   = remove_junk($db->escape($_POST['last-name']));
    $p_dir         = remove_junk($db->escape($_POST['dir']));
    $p_phone       = remove_junk($db->escape($_POST['phone']));
    $p_email       = remove_junk($db->escape($_POST['email']));
    $p_sex         = (int)$_POST['sex'];
    $p_country     = remove_junk($db->escape($_POST['contry']));
    $media_id      = remove_junk($db->escape($_POST['img']));
     
     $p_reinvest = remove_junk($db->escape($_POST['reinvest-val']));
      if ($p_reinvest == 1 ){
        $p_reinvest = 1;
      }else{
        $p_reinvest = 0;
      }
     
     $p_inv_ini     = remove_junk($db->escape($_POST['inv-ini']));
     $p_birthay       = remove_junk($db->escape($_POST['birthay']));

     $date    = make_date();
     
 


     
     $query  = "INSERT INTO investors (";
     $query .="inv_name,inv_last_name,inv_dir,inv_sex,inv_phone,inv_email,inv_reinvest,active,media_id,inv_perc_perm,inv_birthday,date_create,inv_cedula,porc_fijo,country,nota";
     $query .=") VALUES (";
     $query .="'{$p_name}', '{$p_last_name}', '{$p_dir}', '{$p_sex}', '{$p_phone}', '{$p_email}', '{$p_reinvest}', '1', '{$media_id}', '{$p_porc_fijo}', '{$p_birthay}', '{$date_start}', '{$p_cedula}', '{$p_porc}', '{$p_country}', '{$p_nota}'"; 
     $query .=")";    

     if($db->query($query)){    

        $latest = find_latest_id('investors');
        $latest_id= remove_junk($latest['latest']);

        //insert de inversion inicial
        $query2  = "INSERT INTO inv_ini (";
        $query2 .="inv_id,inv_ini_value,inv_ini_date,active,days";
        $query2 .=") VALUES (";
        $query2 .="'{$latest_id}','{$p_inv_ini}', '{$date_start}', '1','{$business_days}'"; 
        $query2 .=")";         

        if($db->query($query2)){
          $latest = find_latest_id('investors');
          $latest_id= remove_junk($latest['latest']);
  
          //insert de inversion inicial
          $query3  = "INSERT INTO binnacle (";
          $query3 .="id_investor,action,types,date,id_usu,name_usu,flag";
          $query3 .=") VALUES (";
          $query3 .="'{$latest_id}','New', 'Agregar', '{$date}','{$user_id}','{$user_name}','1'"; 
          $query3 .=")";         
  
          if($db->query($query3)){
            $id_event=uniqid();
            $start=date("Y-m-d H:i:s",strtotime($p_birthay));
            $end=date("Y-m-d H:i:s",strtotime($start."+ 1 day"));	
            for ($i = 1; $i <= 10; $i++) {              
              //insert de inversion inicial
              $query4  = "INSERT INTO events (";
              $query4 .="title,color,start,end,id_event,id_investor";
              $query4 .=") VALUES (";
              $query4 .="'HBD {$p_name}{$p_last_name}','#008000', '{$start}', '{$end}','{$id_event}','{$latest_id}'"; 
              $query4 .=")";   

              //sumo 1 año
              $start=date("Y-m-d H:i:s",strtotime($start."+ 1 year"));	
              //sumo 1 día
              $end=date("Y-m-d H:i:s",strtotime($start."+ 1 day"));
              $db->query($query4);
            }
            $session->msg('s',"Inversionista agregado exitosamente. ");
            //redirect('email.php?flag=0&name='.$p_name.'&last_name='.$p_last_name.'&dir='.$p_dir.'&phone='.$p_phone.'&reinvest='.$p_reinvest.'&date='.$date_start.'&cedula='.$p_cedula.'&value='.$p_inv_ini.'&days='.$business_days.'&id='.$latest_id,true);
            //header('Location: email.php?'.$p_name);
            //redirect('add_product.php', false);
          } else {
            $session->msg('d',' Lo siento, registro falló.');
            redirect('product.php', false);
          }
          $session->msg('s',"Inversionista agregado exitosamente. ");
          redirect('add_product.php', false);
        } else {
          $session->msg('d',' Lo siento, registro falló.');
          redirect('product.php', false);
        }
   

     } else {
       $session->msg('d',' Lo siento, registro falló.');
       redirect('product.php', false);
     }

   } else{
     $session->msg("d", $errors);
     redirect('add_product.php',false);
   }

 }

?>