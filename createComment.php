<?php
	$name = htmlentities($_POST['name'],ENT_QUOTES, "UTF-8");
	$comment = nl2br(htmlentities($_POST['comment'],ENT_QUOTES, "UTF-8"));
	$database = include('config.php');
	$conn = new mysqli($database['host'], $database['name'], $database['pass'], $database['user']);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO comments (name, comment, dateTime, approved) VALUES ('".$name."', '".$comment."', now(), b'0')";
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	foreach ($conn->query("SELECT MAX(id) as ID from comments") as $row) {
        $id =  $row['ID'] ;
	}
	
	$conn->close();

	$message = "The following comment has been created by " .$_POST['name']. ":";
	$message .= "\n\n" . $_POST['comment'];
	$message .= "\n\nTo confirm this comment please click the link below: ";
	$message .= "\n https://curvier-roofs.000webhostapp.com/confirmation?id=" . $id; 
	
	$email = "comment@example.com";
	$headers = 'From: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	mail('caroline_112233@hotmail.co.uk', 'Someone has posted a comment!', $message, $headers);
?>