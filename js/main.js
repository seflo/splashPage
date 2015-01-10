$(function() {

	// fire slider on page load
    $('.banner').unslider({
    	speed: 500,               //  The speed to animate each slide (in milliseconds)
		delay: 10000,              //  The delay between slide animations (in milliseconds)
		keys: true,               //  Enable keyboard (left, right) arrow shortcuts
		dots: false,               //  Display dot navigation
		fluid: true              //  Support responsive design. May break non-responsive designs
    });

    // Prepare vimeo embed
    var screen = $('#vimeo_container div');
    var html = "<iframe class=\"center\" src=\"//player.vimeo.com/video/102181380?title=0&amp;byline=0&amp;portrait=0\"";
    html = html + "width=\"" + screen.width() + "\" height=\"" + screen.height() + "\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>";
    // Append iframe and apply fitVids
    $("#vimeo_container div").append(html).fitVids();

    
});

