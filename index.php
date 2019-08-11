<?php

//
// Final Decisions rev 3
// Main template file
// Last update: Rev 3a1 on August 11, 2019
//

get_header();
?>

		<main>

			<div class='row row--bottom-margin background-image random-background-image'>
			</div>

			<?
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content/content-excerpts', get_post_format() );
				endwhile;
			endif;
			?>

			<div class='row row--bottom-margin'>
				<hr>
				<div class='container container--wrap container--justify-center'>
					<?php posts_nav_link(' ','Newer Posts','Older Posts'); ?>
				</div>
			</div>

		</main>

<?php get_footer(); ?>
