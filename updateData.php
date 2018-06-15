<?php
	$id = $_POST['id'];
	$database = include('config.php');
	$conn = new mysqli($database['host'], $database['name'], $database['pass'], $database['user']);
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "UPDATE comments set approved = 1 where id = " . $id;

	$conn->query($sql);
	
	$conn->close();
?>