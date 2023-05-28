<?php
  $page_title = 'Lista de productos';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(3);

  setlocale(LC_MONETARY,"es_CO");

  $inv_ini = find_by_id_contrat('pdf',(int)$_GET['id'],'inv_id','inv');  
  $inv_add = find_by_id_contrat('pdf',(int)$_GET['id'],'inv_id','add');  

  if(!$inv_ini){
    $session->msg("d","No tiene contratos asociados.");
    $session->msg("d", $errors);
    //redirect('product.php');
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
           <a href="add_product.php" class="btn btn-primary">Agragar Contrato</a>
         </div>
        <?php }?>
        </div>

        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Contratos</span>
         </strong>
        </div>
        <div class="panel-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="text-center" style="width: 10%;"># Contrato</th>
                <th class="text-center" style="width: 10%;"> Link </th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($inv_ini as $inv_ini_ini):?>
              <tr>
                <td class="text-center"><?php echo remove_junk($inv_ini_ini['numero']);?></td>
                <td class="text-center"><a href="open_pdf.php?id=<?php echo (int)$inv_ini_ini['id'];?>&tipo=<?php echo $inv_ini_ini['tipo'];?>" class="btn btn-success btn-xs"  title="Contrato" data-toggle="tooltip" target="_blank">
                      <span class="glyphicon glyphicon-folder-open"></span>
                </a> </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
		
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Reinversión</span>
         </strong>
        </div>
        <div class="panel-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="text-center" style="width: 10%;"> # Contrato </th>
                <th class="text-center" style="width: 10%;"> Link </th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($inv_add as $inv_add_add):?>
              <tr>
                <td class="text-center"><?php echo remove_junk($inv_add_add['numero']);?></td>
                <td class="text-center"><a href="open_pdf.php?id=<?php echo (int)$inv_add_add['id'];?>&tipo=<?php echo $inv_add_add['tipo'];?>" class="btn btn-success btn-xs"  title="Contrato" data-toggle="tooltip" target="_blank">
                      <span class="glyphicon glyphicon-folder-open"></span>
                </a> </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>


        


      </div>
    </div>
  </div>
  <?php include_once('layouts/footer.php'); ?>
