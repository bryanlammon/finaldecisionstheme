<?php
/*
 *
 * The template for displaying all single posts.
 *
 */
?>

<?php get_header(); ?>

		<main>
			

			<section class="posts-container-single">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); get_template_part( 'template-parts/content/content-single', get_post_format() ); endwhile; endif; ?>
			</section>



			<section class="recent-related-container">

				<section class="recent-cards">
					<h4>Recent Posts</h4>
					<dl>
						<?php $the_query = new WP_Query( 'posts_per_page=5'); ?>

						<?php while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>

						<dt><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></dt>
						<di><?php the_subtitle(); ?></di>
						<?php endwhile; wp_reset_postdata(); ?>
					</dl>
				</section>



				<section class="related-cards">
					<h4>Related Posts</h4>
					<dl>
						<?php
							$tags = wp_get_post_tags( $post -> ID );
							if ($tags) {
								$first_tag = $tags[0] -> term_id;
								$args=array(
									'tag__in' => array($first_tag),
									'post__not_in' => array($post->ID),
									'posts_per_page'=>5,
									'caller_get_posts'=>1
								);

								$my_query = new WP_Query($args);
								if( $my_query->have_posts() ) {
									while ($my_query->have_posts()) : $my_query->the_post(); ?>
									<dt><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></dt>
									<di><?php the_subtitle(); ?></di>

							<?php
								endwhile;
								}
								wp_reset_query();
								}
						?>
					</dl>
				</section>
			</section>

		</main>

<?php get_footer(); ?>
