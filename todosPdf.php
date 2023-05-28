<?php
  require_once('includes/load.php');
  $all_investor = find_all('investors');
  $i=1;
  //var_dump($all_investor);

  $array_num = count($all_investor);

for ($i = 1; $i < $array_num; ++$i){
    $url="http://localhost/warehouse-inventory-system/ejemplopdftodos.php?id=".$i;
    echo "<SCRIPT>window.location='$url';</SCRIPT>";
    //header("location:$url");
    //echo $url;
    sleep(10);
  };

