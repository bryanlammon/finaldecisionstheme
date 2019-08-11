<!-- OLD -->

<?php
/*
 * Template for single-post content: posts with excerpts.
 */
?>

				<article class="post-cards">
					<header class="content-header">

						<!-- post category -->
						<div class="post-category">
							<?php the_category( ', '); ?>
						</div>

						<!-- post title -->
						<div class="post-title">
							<h1><?php the_title(); ?></h1>
						</div>

						<hr class="wide-line">

						<!-- post subtitle -->
						<div class="post-subtitle">
							<p><?php if(function_exists( 'the_subtitle')) the_subtitle(); ?></p>
						</div>

						<div class="container">
							<!-- post date -->
							<div class="post-date">
								<?php the_time( get_option( 'date_format' ) ); ?>
							</div>

							<!-- post author -->
							<div class="post-author">
								By <?php the_author(); ?>
							</div>
						</div>

						<hr class="wide-line">
					</header>

					<div class="post-content">
						<?php the_content(); ?>
					</div>
				</article>
