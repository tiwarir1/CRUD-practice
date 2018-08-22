<?php 
	require 'db.php';

	$id = $_GET['id'];



	$sql = "delete from tasks where id = $id";

	$val = $db->query($sql);

	if($val){
		header('location: index.php');
	}
/*
	$val = $db->query($sql);

	if ($val){
		header('location: index.php');
	}
*/

 ?>