
	$( document ).ready(function() {
	// Hide full Text
	$("#exp1").hide();
	$("#exp2").hide();
	$(".expander2").hide();
	// Expand
	$( ".expand" ).click(function() {
			$("#exp2").hide();
		// Animation
		$( "#exp1" ).show( "fade", 1000, function() {
		});
		$('html, body').animate({
        scrollTop: $("#exp1").offset().top
    }, 2000);


	});
	// Expand
	$( ".expand2" ).click(function() {
			$("#exp1").hide();
		// Animation
		$( "#exp2" ).show( "fade", 1000, function() {

		});
		$('html, body').animate({
        scrollTop: $("#exp2").offset().top
    }, 2000);

	});
});

