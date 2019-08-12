<?php

//
// Final Decisions rev 3
// Template for single posts
// Last update: Rev 3a1 on August 11, 2019
//

?>

			<div class='row row--bottom-margin'>
				<div class='container copy-container'>
					<div class='container title-container'>
						<div class='post__category'>
							<?php the_category( ', '); ?>
						</div>
						<h1><?php the_title(); ?></h2>
					</div>
					<div class='copy-container__body'>
						<hr>
						<p>
							<?php if(function_exists( 'the_subtitle')) the_subtitle(); ?>
						</p>
						<div class='container post-info-container'>
							<p class='post-info-container__date'>
								<?php the_time( get_option( 'date_format' ) ); ?>
							</p>
							<p class='post-info-container__author'>
								By <?php the_author(); ?>
							</p>
						</div>
						<hr>
						<?php the_content(); ?>
					</div>
				</div>
			</div>