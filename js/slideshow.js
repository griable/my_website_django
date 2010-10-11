$(document).ready(function(){
	var nbElements = $('div#caroussel div.caroussel-element').size();
	var elementWidth = $('div#caroussel').width();
	var currentLeftPos = 0;
	window.setInterval(slideElement, 4000, 'easein');
		
	function slideElement() {
		currentLeftPos = currentLeftPos == -(elementWidth * (nbElements - 1)) ? 0 : currentLeftPos-elementWidth;
		
		$('div#caroussel-container').animate({
	    left: currentLeftPos,
	  }, 1000);
	}
});