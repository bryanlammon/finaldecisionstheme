<?php

//
// Final Decisions rev 3
// Template for the first block of front page excerpts
// Last update: Rev 3a1 on August 11, 2019
//

?>
					
					<?php $the_query = new WP_Query( array( 'posts_per_page' => 4, 'offset' => 0 ) ); ?>

					<?php get_template_part( 'template-parts/front-page/front-page-excerpts' ); ?>
