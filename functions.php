<?php

/*
 *
 * Final Decisions 2020 functions and definitions.
 *
 */



/*
 * Add title support
 */
	function theme_slug_setup() {
		add_theme_support( 'title-tag' );
	}
 add_action( 'after_setup_theme', 'theme_slug_setup' );


/*
 * Enqueue all of the styles and scripts
 */

	function my_queue() {
		/* Google fonts */
		wp_enqueue_style( 'google_fonts', 'https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i|Libre+Franklin:700|Playfair+Display:700,700i');

		/* Bootstrap CSS */
		#wp_enqueue_style( 'bootstrapcss', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' );
		/* Normalize CSS */
		wp_enqueue_style( 'normalizecss', get_template_directory_uri() . '/css/normalize.css');
		/* Font Awesome CSS */
		wp_enqueue_style( 'font_awesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css' );
		/* Bigfoot default CSS */
		wp_enqueue_style( 'bigfootcss', get_template_directory_uri() . '/bigfoot/bigfoot-number.css');
		/* My CSS */
		wp_enqueue_style( 'style', get_stylesheet_uri() );

		/* Deregister built-in jQuery */
		wp_deregister_script('jquery');
		/* jQuery JavaScript */
		wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', true );
		/* Popper JavaScript */
		#wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', true);
		/* Bootstrap JavaScript */
		#wp_enqueue_script( 'bootstrapjs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', true);
		/* Bigfoot JavaScript */
		wp_enqueue_script( 'bigfootjs', get_template_directory_uri() . '/bigfoot/bigfoot.min.js', true);
	}

	add_action( 'wp_enqueue_scripts', 'my_queue' );


	/*
	 * Function to add Bigfoot.
	 * Gotten from https://zemartino.tumblr.com/post/110254698520/use-bigfootjs-in-wordpress-without-a-plugin
	 */

	function add_head() { ?>
		<script type="text/javascript">
		jQuery.bigfoot();
		</script>
	<?php }

	add_action( 'wp_head', 'add_head' );

?>
