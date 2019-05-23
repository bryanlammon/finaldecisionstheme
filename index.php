<?php
/*
 *
 * The main template file.
 *
 */
?>

<?php get_header(); ?>

		<main>
			<?php get_template_part( 'template-parts/about-block' ) ?>

			<section class="posts-container">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); get_template_part( 'template-parts/content/content', get_post_format() ); endwhile; endif; ?>
			</section>

		</main>


<?php get_footer(); ?>
