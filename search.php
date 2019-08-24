<?php

//
// Final Decisions rev 3
// Search template file
// Last update: Rev 3a1 on August 24, 2019
//

get_header();
?>

		<main>

			<?php get_template_part( 'template-parts/random-background' ); ?>

			<div class='row row--bottom margin'>
				<div class='container title-container'>
					<h1 class='title'><?php echo $wp_query->found_posts; ?> <?php _e( 'Search Results Found For', 'locale' ); ?>: &ldquo;<?php the_search_query(); ?>&rdquo;</h1>
				</div>
			</div>

			<?php
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