<?php

require_once('includes/load.php');

if (isset($_POST['Event'][0]) && isset($_POST['Event'][1]) && isset($_POST['Event'][2]) && isset($_POST['Event'][3])){
	
	
	$id = $_POST['Event'][0];
	$start = $_POST['Event'][1];
	$end = $_POST['Event'][2];
	$id_event = $_POST['Event'][3];
	//Hacer un select para traer todos los eventos con el mismo id_event y despúes hacer el update según el número de elementos.
	
	/*$sql2 = "SELECT id FROM events WHERE id_event = '$id_event' ";

	$req = $bdd->prepare($sql2);
	$req->execute();

	$events = $req->fetchAll();*/

	$sql = "SELECT id FROM events WHERE id_event = '$id_event'";

	$result = $db->query($sql);
	$events = $db->while_loop($result);

	foreach($events as $event):
		$id= $event['id'];

		/*$sql = "UPDATE events SET  start = '$start', end = '$end' WHERE id = '$id' ";
		
		$query = $bdd->prepare( $sql );
		if ($query == false) {
			print_r($bdd->errorInfo());
			die ('Error');
		}
		$sth = $query->execute();*/

		$sql = "UPDATE events SET  start = '$start', end = '$end' WHERE id = '$id'";
		$result = $db->query($sql);
	
		 if($result){  
			$session->msg('s',"Evento agregado exitosamente ");
		} else {
			$session->msg('d',' Lo siento, registro falló.');
			//redirect('product.php', false);
		}

		//sumo 1 año
		$start=date("Y-m-d H:i:s",strtotime($start."+ 1 year"));	
		//sumo 1 día
		$end=date("Y-m-d H:i:s",strtotime($start."+ 1 day"));
	endforeach;
		/*if ($sth == false) {
			print_r($query->errorInfo());
			die ('Error');
		}else{
			die ('OK');
		}*/
		die ('OK');
}
header('Location: '.$_SERVER['HTTP_REFERER']);
	
?>
