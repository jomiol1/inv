<?php
include 'ChromePhp.php';
ChromePhp::log('Consola ChromePhp!');

  $page_title = 'Calcular Porcentaje Mes';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
  $all_mes = find_all('perc_mes');
?>

<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
    <?php  
    
      /*foreach ($inicial_adicion as $inicial_adicion_ad):
        ChromePhp::log($inicial_adicion_ad['reinvest']);
        if($inicial_adicion_ad['reinvest']=='1'){
          echo(" -Reinvierte:  ");
          echo (int)$inicial_adicion_ad['id'];
          echo(" - ");
          echo $inicial_adicion_ad['total'];
          echo(" <br> ");
        }else{
          echo(" -No Reinvierte:  ");
          echo (int)$inicial_adicion_ad['id'];
          echo(" - ");
          echo $inicial_adicion_ad['total'];
          echo(" <br> ");
        }
      endforeach; 

      foreach ($rendimientos as $rendimientos_ad):
        ChromePhp::log($rendimientos_ad['val']);
        if($rendimientos_ad['reinvest']=='1'){
          echo(" -Rendimientos:  ");
          echo (int)$rendimientos_ad['id'];
          echo(" - ");
          echo $rendimientos_ad['val'];
          echo(" <br> ");
        }else{
          echo(" -No Rendimientos:  ");
          echo (int)$rendimientos_ad['id'];
          echo(" - ");
          echo $rendimientos_ad['val'];
          echo(" <br> ");
        }
      endforeach; */
    ?>
  </div>
</div>
  <div class="row">
  <div class="col-md-9">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Calcular Rendimientos del Mes</span>
         </strong>
        </div>
        <div class="panel-body">
         <div class="col-md-12">
          <form method="post" action="percent_month_calc.php" >
              
              <div class="form-group">
                <div class="row">

                  <div class="col-md-12">
                      <select class="form-control" name="mes">
                        <option value=""> Seleccione mes</option>
                          <?php  foreach ($all_mes as $mes): ?>
                            <option value="<?php echo (int)$mes['id'];?>">
                              <?php echo $mes['perc_mes_name'].' -> '.$mes['perc_mes_value'] ?></option>
                          <?php endforeach; ?>
                      </select>
  
                  </div>
                </div>
              </div>

              <button type="submit" name="calc" value="calc" class="btn btn-danger">Calcular</button>
          </form>
         </div>
        </div>
      </div>
    </div>
  </div>

<?php include_once('layouts/footer.php'); ?>
