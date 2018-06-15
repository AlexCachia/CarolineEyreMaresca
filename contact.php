<?php 
	$jsArray=array('/javascript/contactUsFunctions.js');
	include 'includes/header.php';
?>

<div id = "contactFormWrapper">
	<h2>Contact</h2>
	For bookings and information please complete the form below:<br>

	<form id="form1" action="sendEmail.php" method="post" >
		<input id="name" type="text" name="name" value="" placeholder="Name..."/>
		<input id="email" type="email" name="email" value="" placeholder="Email Address..."/>
		<input id="phone" type="tel" name="phone" value="" placeholder="Phone Number..."/>
		<textarea id = "message" rows="3" placeholder="Message..."></textarea>	
		<br><input type="submit" id = "submitButton" value="Submit">          				
	</form>	
	<div id="responseDiv"></div>		
</div>	
</div>
<?php
include 'includes/shoutOutWrapper.php';
?>
</div>
</div>
</body>
</html>