<?php

//
// Final Decisions rev 3
// Template for single-page content
// Last update: Rev 3a1 on August 11, 2019
//

?>

<div class='row row--bottom margin'>
    <div class='container title-container title-container--narrow'>
        <h1 class='title'><?php the_title(); ?></h1>
    </div>
</div>

<div class='row row--bottom-margin'>
    <div class='container copy-container'>
        <div class='copy-container__body'>
            <?php the_content(); ?>
        </div>
    </div>
</div>
