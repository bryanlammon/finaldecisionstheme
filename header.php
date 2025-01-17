<?php

/*
    Final Decisions Theme

    The across-site header w/ nav menu
*/

?>

<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#00305c">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <meta name="description" content=<?php echo get_bloginfo('description'); ?>>

    <?php wp_head(); ?>

</head>

<body class="bg-dark text-white">
    <header id="header" class="headroom-fixed">
        <nav class="navbar navbar-dark navbar-expand-lg bg-primary border-bottom">
            <div class="container-fluid container-xxl">
                <a class="navbar-brand" href="/">
                    <img src="<?php bloginfo('template_url'); ?>/images/fd-logo-white.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                    <span class="text-white" style="font-weight:700; font-family:'Cormorant Garamond', serif;">final decisions <span style="font-family:'Cormorant SC', serif;">pllc</span></span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse mt-1" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link link-light text-uppercase" style="font-size:0.8rem;" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-light text-uppercase" style="font-size:0.8rem;" href="/about/">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-light text-uppercase" style="font-size:0.8rem;" href="/services/">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-light text-uppercase" style="font-size:0.8rem;" href="/blog/">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-light text-uppercase" style="font-size:0.8rem;" href="/research/">Research</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-secondary text-uppercase" style="font-size:0.8rem;" href="/contact">Contact</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                        <div class="input-group">
                            <label for="s"><?php _x('Search', 'label'); ?></label>
                            <input type="text" class="form-control rounded-start" placeholder="Search" aria-label="Search" value="<?php echo get_search_query(); ?>" name="s" />
                            <input class="btn btn-outline-light" type="submit" value="Search" />
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </header>