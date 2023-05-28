<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.2.1/jquery.quicksearch.js"></script>
<?php
  $page_title = 'Listado de Inversores';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(3);

  $_active=(int)$_GET['active'];
  $_reinvest=(int)$_GET['reinvest'];
  $_flag=(int)$_GET['flag'];
  
  $mes  = max_mes('perc_mes');

  $id_mes=$mes['id'];

  $products = join_product_table_all($_active,$_reinvest,$_flag);
?>
<?php include_once('layouts/header.php'); ?>
  <div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
     
    <div class="col-md-12">
      
      <div class="panel panel-default">

      
        <div class="panel-heading clearfix">
        
          <div class="pull-right">
            <a href="add_product.php" class="btn btn-primary">Agragar Inversionista</a>
          </div>
          
          <div class="pull-left">
            <input class="form-control" type="text" id="search" placeholder="Escribe para buscar..." />
          </div>
        
            <div class="pull-left">
              <a href="product.php?active=0&reinvest=0&flag=0" class="btn btn-primary">Inactivos</a>
            </div>
            <div class="pull-left">
              <a href="product.php?active=1&reinvest=1&flag=1" class="btn btn-primary">Reinvierte</a>
            </div>
            <div class="pull-left">
              <a href="product.php?active=1&reinvest=0&flag=1" class="btn btn-primary">Retira</a>
            </div>
            <div class="pull-left">
              <a href="product.php?active=1&reinvest=0&flag=0" class="btn btn-primary">Todos</a>
            </div>

            <div class="pull-left">
              <a href="pdftabla.php?active=<?php echo (int)$_active;?>&reinvest=<?php echo (int)$_reinvest;?>&flag=<?php echo (int)$_flag;?>" class="btn btn-primary"><span class="fa fa-file-pdf-o"></span> PDF</a>
            </div>
            
           
          

        </div>
        
        <!--<div class="panel-body"> !-->
          <div class="table-responsive">      
            <div class="col-md-12">
              <table class="table table-hover  table-responsive table-condensed" id="table">
                <thead>
                  <tr>
                    <th nowrap>#</th>
                    <th nowrap>Imagen</th>
                    <th nowrap>Nombre</th>
                    <th nowrap>Apellidos</th>
                    <th nowrap>Cédula</th>
                    <th nowrap>Email</th>                    
                    <th nowrap>Telefono</th>
                    <!--<th nowrap>Fecha Cumpleaños</th>!-->
                    <th nowrap>Reinvierte</th>
                    <!--<th nowrap>Activo</th>!-->
                    <th nowrap>Nota</th>
                    <th nowrap>Acciones</th>
                  </tr>
                </thead>
                <tbody>

                  <?php foreach ($products as $product):?>
                  <?php if($product['active']){ echo '<tr>';} else {echo '<tr bgcolor="#FF5C5C">';} ?>
            
                    <td><?php echo count_id();?></td>
                    <td>
                      <?php if($product['image'] === '0'): ?>
                        <img class="img-avatar img-circle" src="uploads/products/no_image.jpg" alt="">
                      <?php else: ?>
                      <img class="img-avatar img-circle" src="uploads/products/<?php echo $product['image']; ?>" alt="">
                    <?php endif; ?>
                    </td>
                    <td nowrap> <?php echo remove_junk($product['inv_name']); ?></td>
                    <td nowrap> <?php echo remove_junk($product['inv_last_name']); ?></td>
                    <td nowrap> <?php echo number_format(trim(remove_junk($product['inv_cedula']))); ?></td>
                    <td nowrap> <?php echo remove_junk($product['inv_email']); ?></td>                    
                    <?php 
                      $telephone=remove_junk($product['inv_phone']);
                      $formatPhone = "(".substr($telephone,0,3).")"." ".substr($telephone,5,3)."-".substr($telephone,6,6);
                      $formatPhone =trim($formatPhone);
                    ?>                
                    <td nowrap> <?php echo remove_junk($formatPhone); ?></td>
                    <!--<td nowrap> <?php //echo read_date($product['inv_birthday']); ?></td>!-->
                    <td align="center" nowrap> <?php if($product['inv_reinvest']){ echo 'SI';} else {echo 'NO';} ?></td>
                    <!--<td nowrap> <?php //if($product['active']){ echo 'SI';} else {echo 'NO';} ?></td>!-->
                    <td nowrap> <?php echo remove_junk($product['nota']); ?></td>
                    <td nowrap>
                      
                        <a href="edit_product.php?id=<?php echo (int)$product['id'];?>" class="btn btn-info btn-xs"  title="Editar" data-toggle="tooltip">
                          <span class="glyphicon glyphicon-edit"></span>
                        </a>
                        <?php if($user['user_level'] === '1'){?>
                          <!--<a href="delete_product.php?id=<?php echo (int)$product['id'];?>" class="btn btn-danger btn-xs"  title="Eliminar" data-toggle="tooltip">
                            <span class="glyphicon glyphicon-trash"></span>
                          </a>!-->
                        <?php }?>
                        <a href="inv_det.php?id=<?php echo (int)$product['id'];?>" class="btn btn-success btn-xs"  title="Detalle" data-toggle="tooltip">
                          <span class="glyphicon glyphicon-plus"></span>
                        </a>
                        <a href="pdf.php?id=<?php echo (int)$product['id'];?>" class="btn btn-success btn-xs"  title="Contrato" data-toggle="tooltip">
                          <span class="glyphicon glyphicon-folder-open"></span>
                        </a>

                        <a href="ejemplopdf.php?id=<?php echo (int)$product['id'];?>" class="btn btn-danger btn-xs"  title="Pdf" data-toggle="tooltip">
                          <span class="glyphicon glyphicon-edit"></span>
                        </a>
                        <!--<a href="pdf.php?id=<?php echo (int)$product['id'];?>" class="btn btn-success btn-xs"  title="Contrato" data-toggle="tooltip" target="_blank">
                          <span class="glyphicon glyphicon-folder-open"></span>
                        </a>-->

                      
                    </td>
                  </tr>
                <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        <!--</div>!-->
      </div>
    </div>
  </div>
  <?php include_once('layouts/footer.php'); ?>
  <script>
    // captura el evento keyup cuando escribes en el input
    $("#search").keyup(function(){
        _this = this;
        // Muestra los tr que concuerdan con la busqueda, y oculta los demás.
        $.each($("#table tbody tr"), function() {
            if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
               $(this).hide();
            else
               $(this).show();                
        });
    }); 
</script>

