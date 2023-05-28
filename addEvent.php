<?php

require_once('includes/load.php');

if(isset($_POST['perm'])&&isset($_POST['title']) && isset($_POST['start']) && isset($_POST['end']) && isset($_POST['color'])){
	$title = $_POST['title'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$color = $_POST['color'];
 
	$id_event=uniqid();


	$query  = "INSERT INTO events (";
	$query .="title,color,start,end,id_event,id_investor";
	$query .=") VALUES (";
	$query .="'{$title}','{$color}', '{$start}', '{$end}','{$id_event}','0'"; 
	$query .=")";   

	if($db->query($query)){  
		$session->msg('s',"Evento agregado exitosamente ");
	} else {
		$session->msg('d',' Lo siento, registro falló.');
		//redirect('product.php', false);
	}
	
}elseif (isset($_POST['title']) && isset($_POST['start']) && isset($_POST['end']) && isset($_POST['color'])){
	
	$title = $_POST['title'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$color = $_POST['color'];

	$fecha_actual = date("d-m-Y");
	//sumo 1 año
	//echo $start; 
	//echo "----";	
	//echo date("Y-m-d H:i:s",strtotime($start."+ 1 year")); 
 
	$id_event=uniqid();
 
	for ($i = 1; $i <= 10; $i++) {
		
		$query  = "INSERT INTO events (";
		$query .="title,color,start,end,id_event,id_investor";
		$query .=") VALUES (";
		$query .="'{$title}','{$color}', '{$start}', '{$end}','{$id_event}','{$id_event}'"; 
		$query .=")";   
		if($db->query($query)){  
			$session->msg('s',"Evento agregado exitosamente ");
		} else {
			$session->msg('d',' Lo siento, registro falló.');
			redirect('product.php', false);
		}
		//sumo 1 año
		$start=date("Y-m-d H:i:s",strtotime($start."+ 1 year"));	
		//sumo 1 día
		$end=date("Y-m-d H:i:s",strtotime($start."+ 1 day"));
	}

}
header('Location: '.$_SERVER['HTTP_REFERER']);

	
?>
