<?php 
	$jsArray=array();
	include 'includes/header.php';
?>
	<h2>Title</h2>
	<span itemprop="image">
		<img id = "bioImage" class = "mainImage" alt ="Bio Image" title="Bio Image" src="media/images/bio.jpg"/>
	</span>
	<p>Placeholder Text</p>	
	<p id = "linkPara">
		<a href="https://www.facebook.com/FacebookLink" onclick="window.open(this.href,'_blank'); return false;" title="Visit Facebook Page">
			<img class = "linkImage" src="media/images/facebook.png" alt="Visit Facebook Page" >
		</a>  
		<a href="https://uk.linkedin.com/in/LinkedInLink" onclick="window.open(this.href,'_blank'); return false;" title="Visit LinkedIn Page">
			<img class = "linkImage" src="media/images/linkedin.png" alt="Visit LinkedIn Page" >
		</a>
	</p>
	
</div>

<?php
include 'includes/shoutOutWrapper.php';
?>
</div>
</div>
</body>
</html>
