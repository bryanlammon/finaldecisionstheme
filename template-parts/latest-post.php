<?php

/*
    Final Decisions

    Template for exerpts for the front page.
*/

?>

<div>
    <?php $the_query = new WP_Query(array("posts_per_page" => 6, "offset" => 0)); ?>

    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

        <hr>

        <div class="row justify-content-between mb-5 div-links-no-underline">
            <div class="col-lg-9">
                <a href="<?php echo get_permalink() ?>">
                    <h3 class="text-white"><?php the_title(); ?></h3>
                </a>
                <?php the_excerpt() ?>
                <a href="<?php echo get_permalink() ?>">Continue reading....</a>
            </div>
            <div class="col-lg-3 pt-3 pt-lg-0">
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

    <?php endwhile;
    wp_reset_postdata(); ?>
</div>