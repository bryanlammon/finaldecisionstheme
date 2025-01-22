<?php

/*
    Final Decisions

    Category page (for posts labled with a certain category)
*/

get_header();
?>

<main>
    <?php get_template_part('template-parts/random-banner'); ?>

    <div class="container pt-1">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="link-light" href="/">Home</a></li>
                <li class="breadcrumb-item"><a class="link-light" href="/blog">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">Posts in category “<?php single_cat_title(); ?>”</li>
            </ol>
        </nav>
    </div>

    <div class="container-fluid px-0 pt-1 pb-5">
        <div class="container">
            <h1 class="display-4 text-white text-center">Posts in category “<?php single_cat_title(); ?>”</h1>
            <div class="row justify-content-between">
                <div class="col-lg-8">

                    <?php
                    if (have_posts()) :
                        while (have_posts()) :
                            the_post();
                            get_template_part('template-parts/content-excerpts', get_post_format());
                        endwhile;
                    endif;
                    ?>

                    <div>
                        <hr>
                        <div class="row justify-content-evenly" aria-label="post-navigation">
                            <?php posts_nav_link(" ", "Newer Posts", "Older Posts"); ?>
                        </div>
                    </div>
                </div>

                <?php get_template_part('template-parts/sidebar') ?>

            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>