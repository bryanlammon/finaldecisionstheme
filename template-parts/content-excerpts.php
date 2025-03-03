<?php

/*
    Final Decisions Theme

    Template for home.php excerpts of posts.
*/

?>

<div>
    <hr>

    <div class="row justify-content-between mb-3 div-links-no-underline">
        <div class="col-lg-9">
            <a href="<?php echo get_permalink() ?>">
                <h3 class="text-white"><?php the_title(); ?></h3>
            </a>
        </div>
        <div class="col-lg-3">
            <div>
                <?php the_time(get_option("date_format")); ?>
            </div>
            <div>
                by <?php the_author(); ?>
            </div>
            <div class="category">
                in <?php the_category(", "); ?>
            </div>
        </div>
    </div>

    <div class="mb-5">

        <?php the_excerpt() ?>
        <a href="<?php echo get_permalink() ?>">Continue reading....</a>

    </div>
</div>