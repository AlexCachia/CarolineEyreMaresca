$( document ).ready(function() {
	$( document ).on( "click", ".galleryImageThumb", function() {
		$("#imageWrapper").find('.current').removeClass("current");		
		$( ".galleryImage" ).eq( $(this).parent().children().index(this)).addClass("current");	
	});
		
	$( document ).on( "click", "#rightArrow", function() {		
		setImage("next");
	});
	
	$( document ).on( "click", "#leftArrow", function() {
		setImage("prev");
	});
	
	
	function setImage(direction){
		$("#imageTextWrapper").empty();
		var current = $("#imageWrapper").find('.current');
		current.removeClass("current");	
		
		if (direction == "next"){
			var elem = current.next();	
		}
		else{
			var elem = current.prev();	
		}
			
		if (!(elem.length)){
			if (direction == "next"){
				elem = $("#imageWrapper .galleryImage").first();
			}
			else{
				elem = $("#imageWrapper .galleryImage").last();
			}		
		}
		elem.addClass("current");
		
		$("#imageTextWrapper").html($("#imageWrapper").find('.current').attr('title'));
	}
});
