<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1 " />
<?php
  require_once('includes/load.php');
  setlocale(LC_MONETARY,"es_CO");
  $products = join_product_table(1,0,0);
  $inv_ini = find_by_id_par('inv_ini',$_GET['id'],'inv_id');  
  $add_inv = find_by_id_par('add_inv',(int)$_GET['id'],'investor_id');
  $inv_rendi = find_by_id_par('inv_rendi',(int)$_GET['id'],'investor_id');
  $inv_cap_reti = find_by_id_par('ret_cap',(int)$_GET['id'],'investor_id');
  /*á -> &aacute;
  é -> &eacute;
  í -> &iacute;
  ó -> &oacute;
  ú -> &uacute;
  ñ -> &ntilde;*/
?>

<h1>Reporte de inversionistas</h1>
<?php if($inv_ini){ ?>
  <h1>Inversi&oacute;n Inicial.</h1>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th class="text-center" style="width: 10%;">#</th>
        <th class="text-center" style="width: 10%;"> Valor </th>
        <th class="text-center" style="width: 10%;"> Fecha Ingreso</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($inv_ini as $inv_ini_ini):?>
      <tr>
        <td class="text-center"><?php //echo count_id();?>-></td>
        <td class="text-center"> <?php echo asDollars(remove_junk($inv_ini_ini['inv_ini_value'])); ?></td>
        <td class="text-center"> <?php echo remove_junk($inv_ini_ini['inv_ini_date']); ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php } ?>

<?php if($add_inv){ ?>
  <h1>Adici&oacute;n de Capital.</h1>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th class="text-center" style="width: 10%;">#</th>
        <th class="text-center" style="width: 10%;"> Valor </th>
        <th class="text-center" style="width: 10%;"> Fecha </th>
        <th class="text-center" style="width: 10%;"> Mes </th>
        <th class="text-center" style="width: 10%;"> Días </th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($add_inv as $add_inv_inv):?>
      <tr>
        <td class="text-center"><?php //echo count_id();?>-></td>
        <td class="text-center"> <?php echo asDollars(remove_junk($add_inv_inv['add_inv_val'])); ?></td>
        <td class="text-center"> <?php echo remove_junk($add_inv_inv['add_inv_date']); ?></td>
        <?php
          /*Sacar el nombe del mes con el id de la tabla perc_mes*/
          $name_mes = find_by_id('perc_mes',remove_junk($add_inv_inv['id_mes']));
        ?>
        <td class="text-center"> <?php echo remove_junk($name_mes['perc_mes_name']); ?></td>
        <td class="text-center"> <?php echo remove_junk($add_inv_inv['add_inv_day']); ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php } ?>


<?php if($inv_rendi){ ?>
  <h1>Rendimientos del Mes.</h1>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th class="text-center" style="width: 10%;">#</th>
        <th class="text-center" style="width: 10%;"> Valor </th>
        <th class="text-center" style="width: 10%;"> Fecha </th>
        <th class="text-center" style="width: 10%;"> Mes </th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($inv_rendi as $inv_rendi_rendi):?>
      <tr>
        <td class="text-center"><?php //echo count_id();?>-></td>
        <td class="text-center"> <?php echo asDollars(remove_junk($inv_rendi_rendi['inv_rendi_value'])); ?></td>
        <td class="text-center"> <?php echo remove_junk($inv_rendi_rendi['inv_rendi_date']); ?></td>

        <?php
          /*Sacar el nombe del mes con el id de la tabla perc_mes*/
          $name_mes = find_by_id('perc_mes',remove_junk($inv_rendi_rendi['per_mes_id']));
        ?>
        <td class="text-center"> <?php echo remove_junk($name_mes['perc_mes_name']); ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php } ?>


<?php if($inv_cap_reti){ ?>
  <h1>Dinero Retirado.</h1>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th class="text-center" style="width: 10%;">#</th>
        <th class="text-center" style="width: 10%;"> Valor Retirado </th>
        <th class="text-center" style="width: 10%;"> Fecha Retiro </th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($inv_cap_reti as $inv_cap_reti_reti):?>
      <tr>
        <td class="text-center"><?php //echo count_id();?>-></td>
        <td class="text-center"> <?php echo asDollars(remove_junk($inv_cap_reti_reti['ret_cap_inv'])); ?></td>
        <td class="text-center"> <?php echo remove_junk($inv_cap_reti_reti['ret_cap_date']); ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php } ?>