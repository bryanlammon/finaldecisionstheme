<?php

/*
    Final Decisions

    Main template file (unused)
*/

get_header();
?>

<main>

    <?php get_template_part('template-parts/random-banner'); ?>

    <div class="container pt-1">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/blog">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">Post</li>
            </ol>
        </nav>
    </div>

    <div class="container-fluid px-0 pt-1 pb-5">
        <div class="container">
            <div class="row justify-content-lg-end">
                <div class="col-lg-8" style="max-width:620px">
                    <div class="div-links-no-underline category">
                        <?php the_category(", "); ?>
                    </div>

                    <h1><?php the_title(); ?></h1>

                    <hr>

                    <div class="d-flex justify-content-between">
                        <div>
                            <?php the_time(get_option("date_format")); ?>
                        </div>

                        <div>
                            By <?php the_author(); ?>
                        </div>
                    </div>

                    <hr>

                    <?php the_content(); ?>

                </div>

                <div class="col-lg-1"></div>

                <?php get_template_part('template-parts/sidebar') ?>

            </div>
        </div>
    </div>

    <!-- Additional Posts -->
    <div class="container-fluid bg-primary px-0 py-5">
        <div class="container">

            <!-- Related Post s-->
            <div class="row">

                <h4 class="display-6 text-center text-md-start">Related Posts</h4>

                <?php
                $orig_post = $post;
                $tags = wp_get_post_tags($post->ID);
                if ($tags) {
                    $tag_ids = array();
                    foreach ($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
                    $args = array(
                        "tag__in" => $tag_ids,
                        "post__not_in" => array($post->ID),
                        "posts_per_page" => 5,
                        "caller_get_posts" => 1
                    );

                    $my_query = new wp_query($args);
                    if ($my_query->have_posts()) {
                        while ($my_query->have_posts()) : $my_query->the_post(); ?>

                            <hr>

                            <div class="row mb-3 div-links-no-underline">
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

                            <div class="mb-5 col-lg-9">
                                <p>
                                    <?php the_excerpt(); ?>
                                </p>

                                <a href="<?php echo get_permalink() ?>">Continue reading....</a>
                            </div>

                <?php
                        endwhile;
                    }
                    wp_reset_query();
                }
                ?>

            </div>

            <!-- Recent Post -->
            <div class="row">

                <h4 class="display-6 text-center text-md-start">Recent Posts</h4>


                <?php $the_query = new WP_Query('posts_per_page=5'); ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                    <hr>

                    <div class="row mb-3 div-links-no-underline">
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

                    <div class="mb-5 col-lg-9">
                        <p>
                            <?php the_excerpt(); ?>
                        </p>

                        <a href="<?php echo get_permalink() ?>">Continue reading....</a>
                    </div>

                <?php endwhile;
                wp_reset_postdata(); ?>

            </div>

        </div>
    </div>

</main>

<?php get_footer(); ?>