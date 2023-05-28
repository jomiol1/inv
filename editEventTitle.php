<?php
require_once('includes/load.php');

if (isset($_POST['delete']) && isset($_POST['id']) && isset($_POST['id_event'])){
	
	
	$id = $_POST['id'];
	$id_event = $_POST['id_event'];
	
	$sql = "DELETE FROM events WHERE id_event = '$id_event'";
	$result = $db->query($sql);

	 if($result){  
		$session->msg('s',"Evento eliminado exitosamente ");
	} else {
		$session->msg('d',' Lo siento, falló.');
		//redirect('product.php', false);
	}
	
}elseif (isset($_POST['title']) && isset($_POST['color']) && isset($_POST['id'])&& isset($_POST['id_event'])){
	
	$id = $_POST['id'];
	$id_event = $_POST['id_event'];
	$title = $_POST['title'];
	$color = $_POST['color'];
	
	$sql = "UPDATE events SET  title = '$title', color = '$color' WHERE id_event = '$id_event'";
	$result = $db->query($sql);

	 if($result){  
		$session->msg('s',"Evento agregado exitosamente ");
	} else {
		$session->msg('d',' Lo siento, registro falló.');
		//redirect('product.php', false);
	}
}
//header('Location: index.php');
header('Location: '.$_SERVER['HTTP_REFERER']);

	
?>
