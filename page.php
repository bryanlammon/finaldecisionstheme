<?php
/*
 *
 * The template for displaying all pages.
 *
 */
?>

<?php get_header(); ?>

		<main>

			<section class="posts-container">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); get_template_part( 'template-parts/content/content-page', get_post_format() ); endwhile; endif; ?>
			</section>

		</main>


<?php get_footer(); ?>
