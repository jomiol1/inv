<?php
  $page_title = 'Agregar Inversionista';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(3);

  $all_country = find_all('country');
  $all_photo = find_all('media'); 
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
            <span>Agregar Inversionista</span>
         </strong>
        </div>
        <div class="panel-body">
          <div class="col-md-12">
            <form  method="post" action="add_product_temp.php" class="clearfix" >
              
              <div class="form-group">
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="glyphicon glyphicon-th-large"></i>
                      </span>
                      <input type="text" class="form-control" name="name" placeholder="Nombre" >
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="glyphicon glyphicon-th-large"></i>
                      </span>
                      <input type="text" class="form-control" name="last-name" placeholder="Apellido">
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="glyphicon glyphicon-th-large"></i>
                      </span>
                      <input type="text" class="form-control" name="dir" placeholder="Dirección">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="glyphicon glyphicon-th-large"></i>
                      </span>
                      <input type="text" class="form-control" name="phone" placeholder="Teléfono">
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                  
                  <div class="col-md-6">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="glyphicon glyphicon-th-large"></i>
                      </span>
                      <input type="text" class="form-control" name="email" placeholder="E-mail">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="glyphicon glyphicon-th-large"></i>
                      </span>
                      <input type="text" class="form-control" name="cedula" placeholder="Cedula">
                    </div>
                  </div>
                </div>
              </div>

              
              <div class="form-group">
                <div class="row">
                  <div class="col-md-6">
                    <select class="form-control" name="sex">
                      <option value="0"> Mujer</option>
                      <option value="1"> Hombre</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <select class="form-control" name="product-photo">
                      <option value="">Selecciona una imagen</option>
                    <?php  foreach ($all_photo as $photo): ?>
                      <option value="<?php echo (int)$photo['id'] ?>">
                        <?php echo $photo['file_name'] ?></option>
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
                        <label>Reinversión?</label>
                      </span>  
                      <span class="input-group-addon">
                        <input type="checkbox" name="reinvest-val" value="1">                        
                      </span>                                                         
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="glyphicon glyphicon-usd"></i>
                      </span>
                      <input type="number" class="form-control" name="inv-ini" placeholder="Inversión Inicial" title="Ingresar el valor sin puntos ni espacios">
                      <span class="input-group-addon">.00</span>
                   </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">   
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

                  <div class="col-md-6">
                   <div class="input-group">
                     <span class="input-group-addon">
                       <i class="glyphicon glyphicon-gift"></i>
                     </span>
                     <span class="input-group-addon">
                      <label for="start">Cumpleaños:</label>
                     </span>
                     <span class="input-group-addon">
                        <input type="date" name="birthay" value=<?php echo make_date();?> >
                      </span>
                    </div>
                  </div>  
                </div>              
              </div>

              <div class="form-group">
                <div class="row">                 
                
                  <div class="col-md-4">
                    <span class="input-group-addon">
                        <label>Pais</label>
                      </span> 
                      <span class="input-group-addon">
                    <select class="form-control" name="contry">
                      <option value="47">Pais</option>
                        <?php  foreach ($all_country as $inv): ?>
                          <option value="<?php echo (int)$inv['id'];?>">
                            <?php echo $inv['code'].'- '.$inv['pais'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    </span>
                  </div>

                  <div class="col-md-4">
                    <div class="input-group">
                    <span class="input-group-addon">
                      <label for="start">Porcentaje de retiro:</label>
                     </span>
                      <input type="number" class="form-control" name="porc-value" placeholder="Porcentaje que retira" value="100" title="Ingresar el valor sin el simbolo de porcentaje">    
                      <span class="input-group-addon">
                        <i>%</i>
                      </span>                 
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="input-group">
                    <span class="input-group-addon">
                      <label for="start">Porcentaje Fijo:</label>
                     </span>
                      <input type="number" class="form-control" name="porc-value-fijo" placeholder="Si tiene porcentaje fijo" value="0" title="Ingresar el valor sin el simbolo de porcentaje">    
                      <span class="input-group-addon">
                        <i>%</i>
                      </span>                 
                    </div>
                  </div>
                </div>
              </div>



              <div class="form-group">
                <div class="row">                                 
                  <div class="col-md-12">                 
                    <label >Nota:</label>
                    <textarea name="nota" class="form-control" rows="3" placeholder="Ingrese si el inversionista tiene una nota adicional"></textarea>
                  </div>
                </div>
              </div>
              
              <button type="submit" name="add_product" class="btn btn-danger">Siguiente</button>
              <!--<button onclick="document.getElementById('id01').style.display='block'">Open Modal</button>-->
              </form>
            </div>
         </div>
        </div>
      </div>
    </div>
    
  </div>



<?php include_once('layouts/footer.php'); ?>