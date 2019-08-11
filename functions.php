<?php

//
// Final Decisions rev 3
// Functions and definitions
// Last update: Rev 3a1 on August 11, 2019
//

// Add title support
//	Wordpress requires all themes support title-tag
//	https://make.wordpress.org/themes/2015/08/25/title-tag-support-now-required/
function theme_slug_setup() {
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'theme_slug_setup' );


// Enqueue all of the styles and scripts
	function my_queue() {

		// Google Fonts
		wp_enqueue_style( 'google_fonts', 'https://fonts.googleapis.com/css?family=Cormorant+Garamond:500,500i,700,700i|Raleway:700');

		// Normalize CSS
		wp_enqueue_style( 'normalizecss', get_template_directory_uri() . '/css/normalize.css');

		// Font Awesome
		wp_enqueue_style( 'font_awesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css' );

		// Bigfoot default CSS
		wp_enqueue_style( 'bigfootcss', get_template_directory_uri() . '/css/bigfoot-default.css');

		// My CSS
		wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css');

		// Need a newer jQuery than Wordpress's one to use Bigfoot
		// So deregister the built-in jQuery
		wp_deregister_script('jquery');
		
		// Register a more recent version of jQuery
		wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', true );

		// Register Bigfoot's JavaScript
		wp_enqueue_script( 'bigfootjs', get_template_directory_uri() . '/js/bigfoot.min.js', true);

		// And finally register my JavaScript
		wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', true);
	}

// Enqueu the styles and scripts
add_action( 'wp_enqueue_scripts', 'my_queue' );

// Add Bigfoot without a plugin
// Gotten from https://zemartino.tumblr.com/post/110254698520/use-bigfootjs-in-wordpress-without-a-plugin
function add_head() { ?>
	<script type="text/javascript">
	jQuery.bigfoot();
	</script>
<?php }
add_action( 'wp_head', 'add_head' );

?>
