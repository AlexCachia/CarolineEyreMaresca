<?php 
	$jsArray=array('javascript/carouselFunctions.js');
	include 'includes/header.php';
?>

<h2 style="text-align: center;">Gallery</h2>
<div class = "arrowDiv"><img id="leftArrow" class ="arrowImage" alt ="Left Arrow" src="media/images/Left_Arrow.png"/></div>
<div id = "imageWrapper">
	<img class = "galleryImage current" src="media/images/gallery/abba (1).jpg" alt ="ABBA inspired duo image" title="Example title"/>
	<img class = "galleryImage" src="media/images/gallery/abba (2).jpg" alt ="Motown inspired duo image" title="Example title"/>
	<img class = "galleryImage" src="media/images/gallery/abba (3).jpg" alt ="ABBA inspired duo image" title="Example title"/>
	<img class = "galleryImage" src="media/images/gallery/tina (1).jpg" alt ="Band image" title="Example title"/>
</div>
<div class = "arrowDiv"><img id="rightArrow" class ="arrowImage" alt ="Right Arrow" src="media/images/Right_Arrow.png"/></div>
<div id = "imageTextWrapper">
</div>
<div id = "thumbs">
	<div class = "thumbnail">
		<img class = "galleryImageThumb" src="media/images/gallery/abba (1).jpg" alt ="ABBA inspired duo image" title="Example title">
		<img class = "galleryImageThumb" src="media/images/gallery/abba (2).jpg" alt ="Motown inspired duo image" title="Example title">
		<img class = "galleryImageThumb" src="media/images/gallery/abba (3).jpg" alt ="ABBA inspired duo image" title="Example title">
		<img class = "galleryImageThumb" src="media/images/gallery/tina (1).jpg" alt ="Band image" title="Example title">
	</div>
</div>	
	
</div>


<?php
include 'includes/shoutOutWrapper.php';
?>
</div>
</div>
</body>
</html>
