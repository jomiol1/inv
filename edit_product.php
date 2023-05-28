<?php
  $page_title = 'Editar inversionista';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(3);
?>
<?php
  $product = find_by_id('investors',(int)$_GET['id']);
  $product2 = find_by_id_par_value('inv_ini',(int)$_GET['id'],'inv_id'); 

  $valor_ini=remove_junk($product2['inv_ini_value']);


  $all_categories = find_all('categories');
  $all_photo = find_all('media');
  if(!$product){
    $session->msg("d","No realizo ninguna actualización.");
    $session->msg("d", $errors);
    redirect('product.php');
  }
?>
<?php
 if(isset($_POST['investors'])){
    $req_fields = array('name','last-name' );
    validate_fields($req_fields);

   if(empty($errors)){
       
       $p_name        = remove_junk($db->escape($_POST['name']));
       $p_last_name   = remove_junk($db->escape($_POST['last-name']));
       $p_dir         = remove_junk($db->escape($_POST['dir']));
       $p_phone       = remove_junk($db->escape($_POST['phone']));
       $p_email       = remove_junk($db->escape($_POST['email']));
       $p_sex         = (int)$_POST['sex'];
       $p_img         = remove_junk($db->escape($_POST['img']));
       $p_fijo        = str_replace(',','.',$_POST['fijo']);
       $p_reinvest = remove_junk($db->escape($_POST['reinvest']));
       $p_fijo_ganan= remove_junk($db->escape($_POST['porc_fijo']));
       $p_nota= remove_junk($db->escape($_POST['nota']));
       $p_days= remove_junk($db->escape($_POST['days']));
       if ($p_reinvest == 1 ){
         $p_reinvest = 1;
         echo $p_reinvest;
       }else{
         $p_reinvest = 0;
         echo $p_reinvest;
       }

       $p_active = remove_junk($db->escape($_POST['active']));
       if ($p_active == 1 ){
         $p_active = 1;
         echo $p_active;
       }else{
         $p_active = 0;
         echo $p_active;
       }
       
       $p_inv_ini     = str_replace(',','',remove_junk($db->escape($_POST['inv-ini'])));
       //$p_rendi       = remove_junk($db->escape($_POST['rendi']));

       if (is_null($_POST['product-photo']) || $_POST['product-photo'] === "") {
         $media_id = '0';
       } else {
         $media_id = remove_junk($db->escape($_POST['product-photo']));
       }
       
       /*
        inv_name
        inv_last_name
        inv_dir
        inv_sex
        inv_phone
        inv_email
        inv_birthday
        inv_reinvest
        active
        media_id
        inv_perc_perm
       */
       $query   = "UPDATE investors SET";
       $query  .=" inv_name ='{$p_name}', inv_last_name ='{$p_last_name}',";
       $query  .=" inv_dir ='{$p_dir}', inv_sex ='{$p_sex}', inv_phone ='{$p_phone}', inv_email='{$p_email}',";
       $query  .=" media_id ='{$media_id}', inv_perc_perm='{$p_fijo}', inv_reinvest='{$p_reinvest}', active='{$p_active}', porc_fijo='{$p_fijo_ganan}', nota='{$p_nota}'";
       $query  .=" WHERE id ='{$product['id']}'";
       $result = $db->query($query);
      if($result && $db->affected_rows() === 1){
        //$session->msg('s',"El Invesionista ha sido actualizado. ");
        //redirect('product.php', false);
      } else {
        //$session->msg('d',' Lo siento, actualización falló.'+$query);
        //redirect('edit_product.php?id='.$product['id'], false);
      }


      //Se actualiza la inversion inicial en la otra tabla con el id
      $date    = make_date();
      $query2   = "UPDATE inv_ini SET";
      $query2  .=" inv_ini_value ='{$p_inv_ini}', inv_ini_date_update ='{$date}', days='{$p_days}'";
      $query2  .=" WHERE id ='{$product2['id']}'";
      $result2 = $db->query($query2);

      if(($result or $result2) or ($db->affected_rows() === 1)){
        $session->msg('s',"El Invesionista ha sido actualizado. ");
        redirect('product.php?active=1&reinvest=0&flag=0', false);
      } else {
        $session->msg('d',' Lo siento, actualización falló.'+$query2);
        redirect('edit_product.php?id='.$product2['id'], false);
      }

   } else{
       $session->msg("d", $errors);
       redirect('product.php?active=1&reinvest=0&flag=0', false);
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
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Editar Inversor</span>
         </strong>
        </div>

        <div class="panel-body">
         <div class="col-md-12">
           <form method="post" action="edit_product.php?id=<?php echo (int)$product['id'] ?>">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon">
                   <i class="glyphicon glyphicon-th-large"> Nombre</i>
                  </span>
                  <input type="text" class="form-control" name="name" value="<?php echo remove_junk($product['inv_name']);?>">
               </div>
               <span class="input-group-addon"></span>
               <div class="input-group">
                  <span class="input-group-addon">
                   <i class="glyphicon glyphicon-th-large"> Apellido</i>
                  </span>
                  <input type="text" class="form-control" name="last-name" value="<?php echo remove_junk($product['inv_last_name']);?>">
               </div>
               <span class="input-group-addon"></span>
               <div class="input-group">
                  <span class="input-group-addon">
                   <i class="glyphicon glyphicon-th-large"> Dirección</i>
                  </span>
                  <input type="text" class="form-control" name="dir" value="<?php echo remove_junk($product['inv_dir']);?>">
               </div>

               <span class="input-group-addon"></span>
               <div class="input-group">
                  <span class="input-group-addon">
                   <i class="glyphicon glyphicon-th-large"> Telefono</i>
                  </span>
                  <input type="text" class="form-control" name="phone" value="<?php echo remove_junk($product['inv_phone']);?>">
               </div>
               <span class="input-group-addon"></span>
               <div class="input-group">
                  <span class="input-group-addon">
                   <i class="glyphicon glyphicon-th-large"> Email</i>
                  </span>
                  <input type="text" class="form-control" name="email" value="<?php echo remove_junk($product['inv_email']);?>">
               </div>
              </div>

              <div class="form-group">
                
                  <div class="row">
                    <div class="col-md-3">
                      <label for="qty">Sexo</label>
                      <select class="form-control" name="sex">
                        <option value="0" <?php if($product['inv_sex'] == 0): echo "selected"; endif; ?>> Mujer</option>
                        <option value="1" <?php if($product['inv_sex'] == 1): echo "selected"; endif; ?>> Hombre</option>
                      </select>
                    </div>
                  
                    <div class="col-md-3">
                      <label for="qty">Avatar</label>
                      <select class="form-control" name="product-photo">
                        <option value=""> Sin imagen</option>
                          <?php  foreach ($all_photo as $photo): ?>                          
                            <option value="<?php echo (int)$photo['id'];?>" <?php if($product['media_id'] === $photo['id']): echo "selected"; endif; ?> >
                              <?php echo $photo['file_name'] ?></option>
                          <?php endforeach; ?>
                      </select>
                    </div>
                    
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="qty">Días Pagos</label>
                        <input class="form-control" name="days" value="<?php echo remove_junk($product2['days']); ?>">
                      </div>
                    </div>
                    

                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="qty">Inversion Inicial</label>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="glyphicon glyphicon-usd"></i>
                          </span>
                          <input class="form-control" name="inv-ini" value="<?php echo number_format($valor_ini,0);?>">
                          <span class="input-group-addon">.00</span>
                      </div>
                    </div>
                    


                  </div>

                
              </div>

              <div class="form-group">
               <div class="row">
              
               <div class="col-md-3">
                  <div class="form-group">
                    <label for="qty">% Fijo</label>
                    <div class="input-group">
                      <span class="input-group-addon">
                       <i class="glyphicon glyphicon-shopping-cart"></i>
                      </span>
                      <input  class="form-control" name="fijo" value="<?php echo remove_junk($product['inv_perc_perm']); ?>">
                      <span class="input-group-addon">
                       %
                      </span>
                   </div>
                  </div>
                 </div>

                 <div class="col-md-3">
                  <div class="form-group">
                    <label for="qty">% de Ganancia</label>
                    <div class="input-group">
                      <span class="input-group-addon">
                       <i class="glyphicon glyphicon-shopping-cart"></i>
                      </span>
                      <input  class="form-control" name="porc_fijo" value="<?php echo remove_junk($product['porc_fijo']); ?>">
                      <span class="input-group-addon">
                       %
                      </span>
                   </div>
                  </div>
                  
                 </div>

                 <div class="col-md-3">
                 <label for="qty">Activo?</label>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <label>Activo?</label>
                      </span>  
                      <span class="input-group-addon">
                        <input type="checkbox" name="active" value="1" <?php if($product['active']) echo 'checked="checked"' ?>>                        
                      </span>                                                         
                    </div>
                  </div>

                 <div class="col-md-3">
                 <label>Reinversión?</label>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <label>Reinversión?</label>
                      </span>  
                      <span class="input-group-addon">
                        <input type="checkbox" name="reinvest" value="1" <?php if($product['inv_reinvest']) echo 'checked="checked"' ?>>                        
                      </span>                                                         
                    </div>
                  </div>

               </div>
              </div>

              <div class="form-group">
                <div class="row">                                 
                  <div class="col-md-12">                 
                    <label >Nota:</label>
                    <textarea name="nota" class="form-control" rows="3" placeholder="Ingrese si el inversionista tiene una nota adicional"><?php echo remove_junk($product['nota']);?></textarea>
                  </div>
                </div>
              </div>

              <button type="submit" name="investors" class="btn btn-danger">Actualizar</button>
          </form>
         </div>
        </div>
      </div>
  </div>

<?php include_once('layouts/footer.php'); ?>
