<?php
  $page_title = 'Adicionar Capital';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(4);
  $all_investor = find_all('investors');
  $all_mes = find_all('perc_mes');
?>
<?php
  if(isset($_POST['add_inv'])){
    $req_fields = array('val');
    validate_fields($req_fields);
    if(empty($errors)){
      //$date    = make_date();
      //$date     = remove_junk($db->escape($_POST['date_start']));
      $date=remove_junk($db->escape($_POST['date_start']));
      $fechaComoEntero = strtotime($date);
      $anio = date("Y", $fechaComoEntero);
      $mes = date("m", $fechaComoEntero);
      $dia = date("d", $fechaComoEntero);
      $business_days=business_days($anio,$mes,$dia+6);

      $p_id_inv = remove_junk($db->escape($_POST['inv']));
      $p_val    = remove_junk($db->escape($_POST['val']));
      $p_days   = remove_junk($db->escape($_POST['days']));
      $p_mes_id = remove_junk($db->escape($_POST['mes']));

      /*insert de inversion inicial*/
      $query  = "INSERT INTO add_inv (";
      $query .="investor_id,add_inv_val,add_inv_day,add_inv_date,id_mes,active";
      $query .=") VALUES (";
      $query .="'{$p_id_inv}', '{$p_val}', '{$business_days}', '{$date}', '{$p_mes_id}','1'"; 
      $query .=")";

     if($db->query($query)){
       $session->msg('s',"Adición agregada exitosamente. ");
       //redirect('add_inv.php', false);
       redirect('email.php?flag=1&date='.$date.'&value='.$p_val.'&days='.$business_days.'&mes='.$p_mes_id.'&id_inv='.$p_id_inv,true);
     } else {
       $session->msg('d',' Lo siento, registro falló.');
       redirect('add_inv.php', false);
     }
   } else{
     $session->msg("d", $errors);
     redirect('add_inv.php',false);
   }

 }

?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
</div>
  <div class="row">
  <div class="col-md-9">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Adicionar capital</span>
         </strong>
        </div>
        <div class="panel-body">
         <div class="col-md-12">
          <form method="post" action="add_inv.php" class="clearfix">
              
              <div class="form-group">
                <div class="row">
                  <div class="col-md-6">
                    <select class="form-control" name="inv">
                      <option value=""> Seleccione un inversionista</option>
                        <?php  foreach ($all_investor as $inv): ?>
                          <option value="<?php echo (int)$inv['id'];?>">
                            <?php echo $inv['id'].'- '.$inv['inv_name'].' '.$inv['inv_last_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="col-md-6">
                      <select class="form-control" name="mes">
                        <option value=""> Seleccione mes de adición</option>
                          <?php  foreach ($all_mes as $mes): ?>
                            <option value="<?php echo (int)$mes['id'];?>">
                              <?php echo $mes['perc_mes_name'] ?></option>
                          <?php endforeach; ?>
                      </select>
  
                  </div>

                </div>
              </div>

              <div class="form-group">
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-usd"></i>
                        </span>
                        <input type="number" class="form-control" name="val" placeholder="Inversión Inicial">
                        <span class="input-group-addon">.00</span>
                    </div>
                  </div>
                  <!--<div class="col-md-4">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="glyphicon glyphicon-th-large"></i>
                      </span>
                      <input type="text" class="form-control" name="days" placeholder="Dias de pago">
                    </div>
                  </div>-->

                  <div class="col-md-6">
                    <div class="input-group">
                     <span class="input-group-addon">
                       <i class="glyphicon glyphicon-option-vertical"></i>
                     </span>
                     <span class="input-group-addon">
                      <label for="start">Fecha de Ingreso:</label>
                     </span>
                     <span class="input-group-addon">
                        <input type="date" name="date_start" value=<?php echo make_date();?> >
                      </span>
                    </div>
                  </div>
                </div>
              </div>


              <button type="submit" name="add_inv" class="btn btn-danger">Agregar</button>
          </form>
         </div>
        </div>
      </div>
    </div>
  </div>

<?php include_once('layouts/footer.php'); ?>
