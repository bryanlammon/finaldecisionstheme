<?php
/*
 * Template for main-page content: posts with excerpts.
 */
?>

				<article class="post-cards">
					<header class="excerpt-header">

						<!-- post category -->
						<div class="post-category">
							<?php the_category( ', '); ?>
						</div>

						<!-- post title -->
						<div class="post-title">
							<a href="<?php echo get_permalink() ?>"><h2><?php the_title(); ?></h2></a>
						</div>

						<hr class="wide-line">

						<!-- post subtitle -->
						<div class="post-subtitle">
							<a href="<?php echo get_permalink() ?>"><p><?php if(function_exists( 'the_subtitle')) the_subtitle(); ?></p></a>
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

					<div class="post-excerpt">
						<?php the_excerpt(); ?>
					</div>

					<div class="post-sharing">
						<a href="mailto:?subject=Final Decisions: <?php the_title(); ?>&body=<?php echo get_permalink() ?>" title="Share via Email"><span class="far fa-envelope"></span></a>
						<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink() ?>" title="Share on Facebook"><span class="fab fa-facebook-f"></span></a>
						<a href="https://twitter.com/intent/tweet?url=<?php echo get_permalink() ?>" title="Share on Twitter"><span class="fab fa-twitter"></span></a>
					</div>
				</article>
