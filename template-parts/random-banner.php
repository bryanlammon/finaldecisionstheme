<?php

/*
    Final Decisions

    Random banner for posts and pages.
*/

?>

<section class="d-flex min-vh-20" lc-helper="background" style="background:url(<?php bloginfo('template_url'); ?>/images/banner-<?= rand(1, 8) ?>-<?= rand(1, 4) ?>.png) center / cover no-repeat;">
</section>