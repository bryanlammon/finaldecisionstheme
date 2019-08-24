<?php

//
// Final Decisions rev 3
// Single-post template
// Last update: Rev 3a1 on August 11, 2019
//

get_header();
?>

		<main>

			<?php get_template_part( 'template-parts/random-background' ); ?>

			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content/content-single', get_post_format() );
				endwhile;
			endif;
			?>

			<div class='row'>
				<div class='container other-posts-container'>

					<div class='other-posts'>
						<h4 class='other-posts__heading'>recent posts</h4>
						<dl>
						<?php $the_query = new WP_Query( 'posts_per_page=4'); ?>

						<?php while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>

						<dt><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></dt>
						<di><?php the_subtitle(); ?></di>
						<?php endwhile; wp_reset_postdata(); ?>
					</dl>
					</div>

					<div class='other-posts other-posts__related-posts'>
						<h4 class='other-posts__heading'>related posts</h4>
						<dl>
							<?php
								$orig_post = $post;
								$tags = wp_get_post_tags( $post->ID );
								if ($tags) {
									$tag_ids = array();
									foreach( $tags as $individual_tag ) $tag_ids[] = $individual_tag->term_id;
									$args=array(
										'tag__in' => $tag_ids,
										'post__not_in' => array($post->ID),
										'posts_per_page'=>5,
										'caller_get_posts'=>1
									);

									$my_query = new wp_query( $args );
									if( $my_query->have_posts() ) {
										while ($my_query->have_posts()) : $my_query->the_post(); ?>
										<dt>
											<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
										</dt>
										<di>
											<?php the_subtitle(); ?>
										</di>

								<?php
									endwhile;
									}
									wp_reset_query();
									}
									?>
						</dl>
					</div>
				</div>
			</div>
		</main>

<?php get_footer(); ?>