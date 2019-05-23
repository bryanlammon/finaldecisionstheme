<?php
/*
 *
 * The template for displaying the header.
 *
 */
?>

<!doctype html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<meta name="description" content=<?php echo get_bloginfo( 'description' ); ?>>

		<?php wp_head();?>

	</head>

	<body>
		<div id="blue-box"></div>
		<div id="site-header-bar">
		<header id="site-header">
			<div id="logo-box">
				<a href="<?php echo home_url() ?>"><img src="<?php echo get_bloginfo('template_url') ?>/images/logo.png" class="logo" alt="Final Decisions logo" /></a>
			</div>
			<nav id="header-nav">
					<div class="header-search">
						<?php get_search_form(); ?>
					</div>
					<div class="header-social">
						<a href="http://twitter.com/BryanLammon" class="social-links"><span class="fab fa-twitter"></span></a>
						<a href="http://finaldecisions.org/feed" class="social-links"><span class="fas fa-rss"></span></a>
					</div>
				</nav>
			</div><!-- /#site-header-bar -->
		</header>
