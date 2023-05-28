<?php
  $page_title = 'Lista de productos';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(3);

  setlocale(LC_MONETARY,"es_CO");

  $inv_ini = find_by_id_par('inv_ini',(int)$_GET['id'],'inv_id');  

  if(!$inv_ini){
    $session->msg("d","No se encuentra el id del inversionista.");
    $session->msg("d", $errors);
    redirect('product.php');
  }else{
    $add_inv = find_by_id_par('add_inv',(int)$_GET['id'],'investor_id');
    $inv_rendi = find_by_id_par('inv_rendi',(int)$_GET['id'],'investor_id');
    $inv_cap_reti = find_by_id_par('ret_cap',(int)$_GET['id'],'investor_id');
    $inv = find_by_id_par('investors',(int)$_GET['id'],'id'); 
    $reinversion=TotalReinversion((int)$_GET['id']); 
    /*if(!$add_inv){
      $session->msg("d","No se encuentra el id del inversionista.");
      $session->msg("d", $errors);
      redirect('product.php');
    }else{
      /*if(!$inv_rendi){
        $session->msg("d","No se encuentra el id del .");
        $session->msg("d", $errors);
        redirect('product.php');
      }else{
        $inv_cap_reti = find_by_id_par('ret_cap',(int)$_GET['id'],'investor_id');
        if(!$inv_cap_reti){
          $session->msg("d","No se encuentra el id del inversionista.");
          $session->msg("d", $errors);
          redirect('product.php');
        }
      }
    }*/
  }

?>
<?php include_once('layouts/header.php'); ?>
  <div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
        <?php if($user['user_level'] === '1'){?>
         <div class="pull-right">
           <a href="add_product.php" class="btn btn-primary">Agragar Inversionista</a>
         </div>
        <?php }?>
        </div>

        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon glyphicon-asterisk"></span>
              <?php foreach ($inv as $inv_tmp):?>
                <span><?php echo remove_junk($inv_tmp['id']); ?> - <?php echo remove_junk($inv_tmp['inv_name']); ?> <?php echo remove_junk($inv_tmp['inv_last_name']); ?> - <?php if($inv_tmp['inv_reinvest']){ echo 'Reinvierte';} else {echo 'Retira';} ?> - Porcentaje Permanente: <?php if($inv_tmp['inv_perc_perm']){ echo $inv_tmp['inv_perc_perm'];echo '%';} else {echo 'NO tiene';}?></span>
              <?php endforeach; ?>            
         </strong>
        </div>


        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Total Capital</span>
         </strong>
        </div>
        <div class="panel-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="text-center" style="width: 10%;">#</th>
                <th class="text-center" style="width: 10%;"> TOTAL </th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($reinversion as $reinversion_tmp):?>
              <tr>
                <td class="text-center">--></td>
                <td class="text-center"> <?php echo asDollars(remove_junk($reinversion_tmp['total'])); ?></td>

              </tr>
             <?php endforeach; ?>
            </tbody>
          </table>
        </div>


        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>CApital Inicial</span>
         </strong>
        </div>
        <div class="panel-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="text-center" style="width: 10%;">#</th>
                <th class="text-center" style="width: 10%;"> Fecha Ingreso </th>
                <th class="text-center" style="width: 10%;"> Valor </th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($inv_ini as $inv_ini_ini):?>
              <tr>
                <td class="text-center"><?php echo count_id();?></td>
                <td class="text-center"> <?php echo remove_junk($inv_ini_ini['inv_ini_date']); ?></td>
                <td class="text-center"> <?php echo asDollars(remove_junk($inv_ini_ini['inv_ini_value'])); ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
		
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Adición de Capital</span>
         </strong>
        </div>
        <div class="panel-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="text-center" style="width: 10%;"> Mes </th>
                <th class="text-center" style="width: 10%;"> Dias * Pagar </th>
                <th class="text-center" style="width: 10%;"> Fecha </th>
                <th class="text-center" style="width: 10%;"> Valor </th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($add_inv as $add_inv_inv):?>
              <tr>
                <?php
                  /*Sacar el nombe del mes con el id de la tabla perc_mes*/
                  $name_mes = find_by_id('perc_mes',remove_junk($add_inv_inv['id_mes']));
                ?>
                <td class="text-center"> <?php echo remove_junk($name_mes['perc_mes_name']); ?></td>
                <td class="text-center"> <?php echo remove_junk($add_inv_inv['add_inv_day']); ?></td>
                <td class="text-center"> <?php echo remove_junk($add_inv_inv['add_inv_date']); ?></td>
                <td class="text-center"> <?php echo asDollars(remove_junk($add_inv_inv['add_inv_val'])); ?></td>
              </tr>
             <?php endforeach; ?>
            </tbody>
          </table>
        </div>


        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Rendimientos</span>
         </strong>
        </div>
        <div class="panel-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="text-center" style="width: 10%;"> Mes </th>
                <th class="text-center" style="width: 10%;"> % </th>
                <th class="text-center" style="width: 10%;"> Fecha </th>
                <th class="text-center" style="width: 10%;"> Valor </th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($inv_rendi as $inv_rendi_rendi):
                  /*Sacar el nombe del mes con el id de la tabla perc_mes*/
                  $name_mes = find_by_id('perc_mes',remove_junk($inv_rendi_rendi['per_mes_id']));
              ?>
              
              <tr>
                <td class="text-center"> <?php echo remove_junk($name_mes['perc_mes_name']); ?></td>
                <td class="text-center"><?php echo remove_junk($name_mes['perc_mes_value']*100); ?>%</td>
                <td class="text-center"> <?php echo remove_junk($inv_rendi_rendi['inv_rendi_date']); ?></td>
                <td class="text-center"> <?php echo asDollars(remove_junk($inv_rendi_rendi['inv_rendi_value'])); ?></td>
              </tr>
             <?php endforeach; ?>
            </tbody>
          </table>
        </div>


        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Dinero Retirado</span>
         </strong>
        </div>
        <div class="panel-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="text-center" style="width: 10%;">#</th>
                <th class="text-center" style="width: 10%;"> Fecha Retiro </th>
                <th class="text-center" style="width: 10%;"> Valor Retirado </th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($inv_cap_reti as $inv_cap_reti_reti):?>
              <tr>
                <td class="text-center"><?php echo count_id();?></td>
                <td class="text-center"> <?php echo remove_junk($inv_cap_reti_reti['ret_cap_date']); ?></td>
                <td class="text-center"> <?php echo asDollars(remove_junk($inv_cap_reti_reti['ret_cap_inv'])); ?></td>

              </tr>
             <?php endforeach; ?>
            </tbody>
          </table>
        </div>




        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Generar Reporte Excel</span>
         </strong>
         <div class="btn-group">

            <a href="output.php?t=excel&id=<?php echo (int)$_GET['id'];?>" class="btn btn-success btn-lg"  title="Excel" data-toggle="tooltip">
              <span class="glyphicon glyphicon-edit"></span>
            </a>

            <a href="ejemplopdf.php?id=<?php echo (int)$_GET['id'];?>" class="btn btn-danger btn-lg"  title="Pdf" data-toggle="tooltip">
              <span class="glyphicon glyphicon-edit"></span>
            </a>

          </div>
        </div>


      </div>
    </div>
  </div>
  <?php include_once('layouts/footer.php'); ?>
