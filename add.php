<?php 
include 'db.php';

if (isset($_POST['send'])){
	$name = htmlspecialchars($_POST['task']); /*the name that was in (input type = "text" required name = "task")  */ 

	$sql = "insert into tasks (name) values ('$name')";

	$val = $db->query($sql);

	if ($val){ /*it means if ($val == true)  */
		header('location: index.php');
	}

}

 ?>