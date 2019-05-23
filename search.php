<?php
/*
 *
 * The template for displaying search results.
 *
 */
?>

<?php get_header(); ?>

		<main>
			<section id="searched">
				<div class="blog-about">
					<h1 class="search-title">
						<?php echo $wp_query->found_posts; ?> <?php _e( 'Search Results Found For', 'locale' ); ?>: &ldquo;<?php the_search_query(); ?>&rdquo;
					</h1>
				</div>
			</section><!-- /#searched -->



			<section class="posts-container">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); get_template_part( 'template-parts/content/content', get_post_format() ); endwhile; endif; ?>
			</section>

		</main>


<?php get_footer(); ?>
