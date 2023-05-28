<?php
  $page_title = 'Admin página de inicio';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(3);
?>
<?php
  $c_categorie     = count_by_id_par('investors','1');
  $c_product       = count_by_id_par('investors','0');
  $c_sale          = max_mes('perc_mes');
  $c_user          = count_by_id('investors');
  $products_sold   = TotalInversionFondo();
  $recent_products = find_recent_product_added('5');
  $recent_sales    = TotalPagoMensual()
?>
<?php include_once('layouts/header.php'); ?>

<div class="row">
   <div class="col-md-6">
     <?php echo display_msg($msg); ?>
   </div>
</div>

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-box clearfix">
        <div class="panel-icon pull-left bg-green">
          <i class="glyphicon glyphicon-user"></i>
        </div>
        <div class="panel-value pull-right">
          <h2 class="margin-top"> <?php  echo $c_user['total']; ?> </h2>
          <p class="text-muted">Inversionistas</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="panel panel-box clearfix">
        <div class="panel-icon pull-left bg-red">
          <i class="glyphicon glyphicon-list"></i>
        </div>
        <div class="panel-value pull-right">
          <h2 class="margin-top"> <?php  echo $c_categorie['total']; ?> </h2>
          <p class="text-muted">Reinversión</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="panel panel-box clearfix">
        <div class="panel-icon pull-left bg-blue">
          <i class="glyphicon glyphicon-shopping-cart"></i>
        </div>
        <div class="panel-value pull-right">
          <h2 class="margin-top"> <?php  echo $c_product['total']; ?> </h2>
          <p class="text-muted">Retira</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="panel panel-box clearfix">
        <div class="panel-icon pull-left bg-yellow">
          <i class="glyphicon glyphicon-usd"></i>
        </div>
        <div class="panel-value pull-right">
          <h2 class="margin-top"> <?php  echo $c_sale['value']*100; ?>%</h2>
          <p class="text-muted">Rendimiento mes</p>
        </div>
       </div>
    </div>
  </div>

  <?php if($user['user_level'] === '1'||$user['user_level'] === '2'){?>
    <div class="row">
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <strong>
              <span class="glyphicon glyphicon-th"></span>
              <span>Total Inversión Fondo</span>
            </strong>
          </div>
          <div class="panel-body">
            <table class="table table-striped table-bordered table-condensed">
              <thead>
                <tr>
                  <th>Total</th>             
                <tr>
                </thead>
              <tbody>
                <?php foreach ($products_sold as  $product_sold): $total=$product_sold['total'];?>
                  <tr>
                    <td>$ <?php echo number_format($total,0); ?></td>
                  </tr>
                <?php endforeach; ?>
              <tbody>
          </table>
        </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <strong>
              <span class="glyphicon glyphicon-th"></span>
              <span>Pago Rendimientos por Mes</span>
            </strong>
          </div>
          <div class="panel-body">
            <table class="table table-striped table-bordered table-condensed">
              <thead>
                <tr>
                  <th class="text-center" style="width: 50px;">#</th>
                  <th>Mes</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($recent_sales as  $recent_sale): ?>
                  <tr>
                    <td><?php echo count_id();?></td>
                    <td>
                      <?php echo $recent_sale['mes']; ?>
                    </td>
                    <td>$ 
                      <?php echo number_format($recent_sale['val'],0); ?>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
     
  <?php }?>
  
  <?php include("fullcalendar/index.php");?>



<?php include_once('layouts/footer.php'); ?>
