<?php
$page_title = 'Verificar Inversionista';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(3);

if (isset($_POST['add_product'])) {

  $date_start = remove_junk($db->escape($_POST['date_start']));
  $fechaComoEntero = strtotime($date_start);
  $anio = date("Y", $fechaComoEntero);
  $mes = date("m", $fechaComoEntero);
  $dia = date("d", $fechaComoEntero);
  $dia=$dia+6;
  if($dia <= 31){
    $business_days = business_days($anio, $mes, $dia);
  }else{
    $business_days=0;
  }
  
  $p_nota        = remove_junk($db->escape($_POST['nota']));
  $p_porc_fijo   = remove_junk($db->escape($_POST['porc-value-fijo']));
  $p_porc        = remove_junk($db->escape($_POST['porc-value']));
  $p_cedula      = remove_junk($db->escape($_POST['cedula']));
  $p_name        = remove_junk($db->escape($_POST['name']));
  $p_last_name   = remove_junk($db->escape($_POST['last-name']));
  $p_dir         = remove_junk($db->escape($_POST['dir']));
  $p_phone       = remove_junk($db->escape($_POST['phone']));
  $p_email       = remove_junk($db->escape($_POST['email']));
  $p_sex         = (int)$_POST['sex'];

  $p_reinvest = remove_junk($db->escape($_POST['reinvest-val']));
  if ($p_reinvest == 1) {
    $p_reinvest = 1;
  } else {
    $p_reinvest = 0;
  }

  $p_inv_ini     = remove_junk($db->escape($_POST['inv-ini']));
  $p_birthay       = remove_junk($db->escape($_POST['birthay']));
  $p_country       = remove_junk($db->escape($_POST['contry']));

  if (is_null($_POST['product-photo']) || $_POST['product-photo'] === "") {
    $media_id = '0';
  } else {
    $media_id = remove_junk($db->escape($_POST['product-photo']));
  }
  $pais=find_by_id('country',$p_country);
  $p_country_name=$pais['pais'];
  
} else {
  $p_nota        = '';
  $p_porc_fijo   = '';
  $p_porc        = '';
  $date_start    = '';
  $business_days = '';
  $p_cedula      = '';
  $p_name        = '';
  $p_last_name   = '';
  $p_dir         = '';
  $p_phone       = '';
  $p_email       = '';
  $p_sex         = '';
  $p_reinvest    = '';
  $p_inv_ini     = '';
  $p_birthay     = '';
  $media_id      = '';
  $p_country     = '';
  $date_start    = '';

}


?>
<?php include_once('layouts/header.php'); ?>


<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Verificar Inversionista</span>
        </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-12">
          <form method="post" action="insert_investor.php" class="clearfix">
          <input name="img" type="hidden" value=<?php echo $media_id ?>>
            <div class="form-group">
              <div class="row">
                <div class="col-md-12">
                  <label for="nombre">Fecha de Ingreso</label>
                  <input type="text" class="form-control" name="date_start" readonly value=<?php echo $date_start ?>>
                </div>
                <div class="col-md-12">
                  <label for="nombre">Nombre</label>
                  <input type="text" class="form-control" name="name" readonly  value="<?php echo $p_name ?>">
                </div>
                <div class="col-md-12">
                  <label for="nombre">Apellido</label>
                  <input type="text" class="form-control" name="last-name" readonly  value="<?php echo $p_last_name ?>">
                </div>
                <div class="col-md-12">
                  <label for="nombre">Cedula</label>
                  <input type="text" class="form-control" name="cedula" readonly  value=<?php echo $p_cedula ?>>
                </div>
                <div class="col-md-12">
                  <label for="nombre">Sexo</label>
                  <input type="text" class="form-control" name="sex_name" readonly  value=<?php if($p_sex=="1"){echo "Hombre";}else{echo "Mujer";} ?>>
                  <input name="sex" type="hidden" value=<?php echo $p_sex ?>>
                </div>
                <div class="col-md-12">
                  <label for="nombre">Telefono</label>
                  <input type="text" class="form-control" name="phone" readonly  value=<?php echo $p_phone ?>>
                </div>
                <div class="col-md-12">
                  <label for="nombre">Dirección</label>
                  <!--<input type="text" class="form-control" name="dir" readonly  value=<?//php echo urlencode($p_dir) ?>>-->
                  <input type="text" class="form-control" name="dir" readonly  value="<?php echo $p_dir ?>">
                </div>
                <div class="col-md-12">
                  <label for="nombre">Email</label>
                  <input type="text" class="form-control" name="email" readonly  value=<?php echo $p_email ?>>
                </div>
                <div class="col-md-12">
                  <label for="nombre">Cumpleaños</label>
                  <input type="text" class="form-control" name="birthay" readonly  value=<?php echo $p_birthay ?>>
                </div>
                <div class="col-md-12">
                  <label for="nombre">Pais</label>
                  <input type="text" class="form-control" name="contry_name" readonly  value=<?php echo $p_country_name ?>>
                  <input name="contry" type="hidden" value=<?php echo $p_country ?>>
                </div>
                <div class="col-md-12">
                  <label for="nombre">Valor de la inversión</label>
                  <input type="text" class="form-control" name="inv-ini" readonly  value=<?php echo $p_inv_ini ?>>
                </div>
                <div class="col-md-12">
                  <label for="nombre">Dias pagos del mes de ingreso</label>
                  <input type="text" class="form-control" name="business-days"   value=<?php echo $business_days ?>>
                </div>
                <div class="col-md-12">
                  <label for="nombre">Reinvierte</label>
                  <input type="text" class="form-control" name="reinvest-val-name" readonly  value=<?php if($p_reinvest=="1"){echo "Si";}else{echo "No";} ?>>
                  <input name="reinvest-val" type="hidden" value=<?php echo $p_reinvest ?>>
                </div>
                <div class="col-md-12">
                  <label for="nombre">Porcentaje de Retiro</label>
                  <input type="text" class="form-control" name="porc-value" readonly  value=<?php echo $p_porc ?>>
                </div>
                <div class="col-md-12">
                  <label for="nombre">Porcentaje Fijo</label>
                  <input type="text" class="form-control" name="porc-value-fijo" readonly  value=<?php echo $p_porc_fijo ?>>
                </div>

                <div class="col-md-12">
                  <label for="nombre">Porcentaje Fijo</label>
                  <textarea name="nota" class="form-control" rows="3" readonly ><?php echo $p_nota ?></textarea>                  
                </div>
                
                
              </div>
            </div>

            <div class="form-group">
                <div class="row">
                  <div class="col-md-12">
                  <h3>Esta seguro de ingresar la información del inversionista?</h3>                    
                  </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                  <div class="col-md-12">
                    <input type="button" value="Cancelar" onClick="history.go(-1);" class="btn btn-primary btn-lg btn-block">                    
                  </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                  <div class="col-md-12">
                    <button type="submit" name="add_product" class="btn btn-sucess btn-lg btn-block">Agregar</button>                                        
                  </div>
                </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>



<?php include_once('layouts/footer.php'); ?>