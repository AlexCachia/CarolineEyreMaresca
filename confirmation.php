<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Comment Approved</title>
		<meta charset="UTF-8">

		<link rel="styleSheet" href="css/styles.css" >
		<script src="javascript/jquery-3.1.1.min.js" type="text/javascript"></script>
		<script src="javascript/updateFunctions.js" type="text/javascript"></script>
	</head>
	<body>
		<input type="hidden" id = "commentID" value="<?php echo $_GET['id']; ?>" />
		<div id = "responseDiv">
		</div>
	</body>
</html>