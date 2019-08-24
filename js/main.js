// JQuery functions; document ready ensures nothing is run until the page loads
$(document).ready(function(){

	// JQuery function to toggle the mobile navigation menu
	$('.mobile-navigation-menu__toggle-button').click(function(){
		$('#mobile-navigation-menu').toggleClass('mobile-navigation-menu--visible');
	});

	// JQuery function to toggle the large-screen search bar
	$('.large-navigation-menu__search-toggle').click(function(){
		$('#large-search-bar').toggleClass('large-search-bar--visible');
	});

	// JQuery function to scroll up 100 pixels from anchor link
	// From https://stackoverflow.com/questions/17534661/make-anchor-link-go-some-pixels-above-where-its-linked-to

	// Apply the offset
	function offsetAnchor() {
		if (location.hash.length !== 0) {
			window.scrollTo(window.scrollX, window.scrollY - 100);
		}
	}

	// Capture click events of all <a> elements with hrefs starting with #
	$(document).on('click', 'a[href^="#"]', function(event) {
		// Click events are captured before hashchanges. 
		// Timeout causes offsetAnchor to be called after the page jump.
		window.setTimeout(function() {
			offsetAnchor();
		}, 0);
	});
	// Set the offset when entering page with hash present in the url
	window.setTimeout(offsetAnchor, 0);

});
