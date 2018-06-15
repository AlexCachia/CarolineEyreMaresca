<?php 
	$jsArray=array('/javascript/commentFunctions.js');
	
	include 'includes/header.php';
?>

<h2>Reviews</h2>
<form id="form1" action="createComment.php" method="post" >
	<input id="name" type="text" value="" placeholder="Name..."/>
	<textarea id="comment" rows="3" placeholder="Add a comment..."></textarea>
	<input type="submit" id = "commentButton" value="Comment"/>   
	<img src="media/spinner.gif" id = "spinner" alt="Be patient..." />					
</form>	

<div id="responseDiv"></div>
<div id="commentArea"></div>

</div>


<?php
include 'includes/shoutOutWrapper.php';
?>
</div>
</div>
</body>
</html>
