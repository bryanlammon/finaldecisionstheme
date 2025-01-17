<?php

/*
    Final Decisions Theme

    Page
*/

get_header();
?>

<main>

    <?php get_template_part('template-parts/random-banner'); ?>

    <div class="container pt-1">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
            </ol>
        </nav>
    </div>

    <div class="container-fluid px-0 pt-1 pb-5">
        <div class="container">
            <h1 class="display-3 text-center"><?php the_title(); ?></h1>
            <div class="row justify-content-lg-end">
                <div class="col-lg-8" style="max-width:620px">
                    <?php the_content(); ?>
                </div>
                <?php get_template_part('template-parts/sidebar') ?>
            </div>
        </div>
    </div>


</main>

<?php get_footer(); ?>
