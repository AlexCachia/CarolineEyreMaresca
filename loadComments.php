<?php
	$database = include('config.php');
	$conn = new mysqli($database['host'], $database['name'], $database['pass'], $database['user']);
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "select * from ApprovedComments where approved = 1 order by dateTime desc";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo '<div class = "commentRow">';
			$date = date_create($row["dateTime"]);
			echo $row["comment"] .'<p><i>'. $row["name"] .'<br>'. date_format($date, 'd M Y').'</i></p>';
			echo '</div>';
		}
	}

	$conn->close();
?>
