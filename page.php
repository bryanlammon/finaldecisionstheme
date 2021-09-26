<?php

//
// Final Decisions rev 3
// Single-page template
// Last update: Rev 3a1 on August 11, 2019
//

get_header();
?>

<main>

    <?php get_template_part('template-parts/random-background'); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post();
            get_template_part('template-parts/content/content-page', get_post_format());
        endwhile;
    endif; ?>

</main>

<?php get_footer(); ?>
