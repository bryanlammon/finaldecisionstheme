/* JQuery functions; document ready ensures nothing is run until the page loads */
$(document).ready(function(){

	/* JQuery function to toggle the mobile navigation menu */
	$('.mobile-navigation-menu__toggle-button').click(function(){
		$('#mobile-navigation-menu').toggleClass('mobile-navigation-menu--visible');
	});

	/* JQuery function to toggle the large-screen search bar */
	$('.large-navigation-menu__search-toggle').click(function(){
		$('#large-search-bar').toggleClass('large-search-bar--visible');
	});

});
