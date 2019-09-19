var $doc = $('html, body');
$(".navbar-nav a").click(function(){
	$doc.animate({
		scrollTop: $( $.attr(this, 'href') ).offset().top
	}, 500);
	return false;
});