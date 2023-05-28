<?php
  $page_title = 'Retirar Capital';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(3);
  $all_investor = find_all('investors');
?>
<?php
  if(isset($_POST['ret_cap'])){
    $req_fields = array('val');
    validate_fields($req_fields);
    if(empty($errors)){
      $date    = make_date();
      $p_id_inv = remove_junk($db->escape($_POST['inv']));
      $p_val    = remove_junk($db->escape($_POST['val']));

      /*insert de inversion inicial*/
      $query  = "INSERT INTO ret_cap (";
      $query .="investor_id,ret_cap_inv,ret_cap_date";
      $query .=") VALUES (";
      $query .="'{$p_id_inv}', '{$p_val}', '{$date}'"; 
      $query .=")";

     if($db->query($query)){
       $session->msg('s',"Producto agregado exitosamente. ");
       redirect('ret_cap.php', false);
     } else {
       $session->msg('d',' Lo siento, registro falló.');
       redirect('ret_cap.php', false);
     }
   } else{
     $session->msg("d", $errors);
     redirect('ret_cap.php',false);
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
            <span>Retirar capital</span>
         </strong>
        </div>
        <div class="panel-body">
         <div class="col-md-12">
          <form method="post" action="ret_cap.php" class="clearfix">
              
              <div class="form-group">
                <div class="row">
                  <div class="col-md-12">
                    <select class="form-control" name="inv">
                      <option value=""> Seleccione un inversionista</option>
                        <?php  foreach ($all_investor as $inv): ?>
                          <option value="<?php echo (int)$inv['id'];?>">
                          <?php echo $inv['id'].'- '.$inv['inv_name'].' '.$inv['inv_last_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                  <div class="col-md-12">
                    <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-usd"></i>
                        </span>
                        <input type="number" class="form-control" name="val" placeholder="Retiro de dinero">
                        <span class="input-group-addon">.00</span>
                    </div>
                  </div>
                </div>
              </div>


              <button type="submit" name="ret_cap" class="btn btn-danger">Agregar</button>
          </form>
         </div>
        </div>
      </div>
    </div>
  </div>

<?php include_once('layouts/footer.php'); ?>
