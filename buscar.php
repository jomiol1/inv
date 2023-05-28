<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(2);

  if(isset($_POST['add_inv'])){
    $all_investor = join_product_table_clave('investors');
 }
 ?>
