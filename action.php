<?php
include_once("inc/db_connect.php");
if ($_POST['action'] == 'edit' && $_POST['id']) {	
	$updateField='';
	if(isset($_POST['pregunta'])) {
		$updateField.= "pregunta='".$_POST['pregunta']."'";
	} else if(isset($_POST['respuesta'])) {
		$updateField.= "respuesta='".$_POST['respuesta']."'";
	} 
	if($updateField && $_POST['id']) {
		$sqlQuery = "UPDATE developers SET $updateField WHERE id='" . $_POST['id'] . "'";	
		mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));	
		$data = array(
			"message"	=> "Record Updated",	
			"status" => 1
		);
		echo json_encode($data);		
	}
}
if ($_POST['action'] == 'delete' && $_POST['id']) {
	$sqlQuery = "DELETE FROM developers WHERE id='" . $_POST['id'] . "'";	
	mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));	
	$data = array(
		"message"	=> "Record Deleted",	
		"status" => 1
	);
	echo json_encode($data);	
}
?>