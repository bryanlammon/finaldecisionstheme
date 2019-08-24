<?php

//
// Final Decisions rev 3
// Compnent for the third block of front-page excerpts
// Sets the query then gets the component to create the actual excerpts
// Last update: Rev 3a1 on August 11, 2019
//

?>
					
					<?php $the_query = new WP_Query( array( 'posts_per_page' => 4, 'offset' => 8 ) ); ?>

					<?php get_template_part( 'template-parts/front-page/front-page-excerpts' ); ?>