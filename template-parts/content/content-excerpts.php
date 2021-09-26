<?php

//
// Final Decisions rev 3
// Template for index-page excerpts of posts
// Last update: Rev 3a1 on August 11, 2019
//

?>

<div class='row row--bottom-margin'>
    <div class='container copy-container'>
        <div class='container title-container'>
            <div class='post__category'>
                <?php the_category(', '); ?>
            </div>
            <a href="<?php echo get_permalink() ?>">
                <h2 class='title title--dark-shade'><?php the_title(); ?></h2>
            </a>
        </div>
        <div class='copy-container__body'>
            <hr>
            <a href="<?php echo get_permalink() ?>">
                <p class='title--dark-shade'><?php if (function_exists('the_subtitle')) the_subtitle(); ?></p>
            </a>
            <div class='container post-info-container'>
                <p class='post-info-container__date'>
                    <?php the_time(get_option('date_format')); ?>
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
