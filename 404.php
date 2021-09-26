<?php

//
// Final Decisions rev 3
// 404 template
// Last update: Rev 3a1 on September 3, 2019
//

get_header();
?>

<main>

    <div class='row hero-row' style='background-image: url("<?php bloginfo('template_url'); ?>/images/c<?= rand(2, 12) ?>--1600.jpg")'>
        <div class='container hero-container'>
            <h1 class='copy--hero title--hero'>Page not found.</h1>
        </div>
    </div>

</main>

<?php get_footer(); ?>
