<?php

//
// Final Decisions rev 3
// Template for the second block of front page excerpts
// Last update: Rev 3a1 on August 24, 2019
//

?>
					
					<?php $the_query = new WP_Query( array( 'posts_per_page' => 4, 'offset' => 4 ) ); ?>

					<?php while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>

						<div class='fp-posts'>
							<div class='post__category'>
								<?php the_category( ', '); ?>
							</div>
							<a href="<?php echo get_permalink() ?>">
								<h3 class='title title--dark-shade'><?php the_title(); ?></h3>
							</a>
							<a href="<?php echo get_permalink() ?>">
								<p class='title--dark-shade'><?php if(function_exists( 'the_subtitle')) the_subtitle(); ?></p>
							</a>
						</div>
					<?php endwhile; wp_reset_postdata(); ?>
