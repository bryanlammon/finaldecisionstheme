<?php
//
// Final Decisions rev 4
// The across-site header w/ nav menu
// Last update: rev 4 on September 2021
//

?>

<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#00305c">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <meta name="description" content=<?php echo get_bloginfo('description'); ?>>

    <?php wp_head(); ?>

</head>

<body>
    <header>
        <div class='row header-row'>
            <div class='container header-container' role='banner'>

                <div class='header__name'>
                <a href=<?php echo get_home_url(); ?>>final decisions</a>
                </div>
                <div class='header__logo'>
                    <a href=<?php echo get_home_url(); ?>>
                        <picture>
                            <source srcset='<?php echo get_bloginfo('template_url') ?>/images/fd-logo-white.svg' media='(prefers-color-scheme: dark)'>
                            <img src='<?php echo get_bloginfo('template_url') ?>/images/fd-logo-blue.svg' alt='Final Decisions Logo'>
                        </picture>
                    </a>
                </div>

                <button class='mobile-navigation-menu__toggle-button'>
                    <span class='fa fa-bars'></span>
                </button>

                <div class='large-navigation-menu' role='navigation' aria-label='desktop navigation'>
                    <a href='/about' class='large-navigation-menu__wide-link'>About</a>
                    <a href=<?php echo get_site_url(null, '#fp-categories', ''); ?> class='large-navigation-menu__wide-link'>Categories</a>
                    <a href='/blog' class='large-navigation-menu__wide-link'>Archive</a>
                    <a href='/scholarship' class='large-navigation-menu__wide-link'>Scholarship</a>
                    <!--<a href='/consulting' class='large-navigation-menu__wide-link'>Consulting</a>-->
                    <a href='https://github.com/bryanlammon' class='large-navigation-menu__little-link'>
                        <span class='fab fa-github'></span>
                    </a>
                    <a href='https://finaldecisions.org/feed' class='large-navigation-menu__little-link'>
                        <span class='fa fa-rss'></span>
                    </a>
                    <button class='large-navigation-menu__search-toggle'>
                        <span class='fas fa-search'></span>
                    </button>
                </div>

                <div class='large-search-bar' id='large-search-bar'>
                    <div class='container large-search-bar__container'>
                        <?php get_search_form(); ?>
                    </div>
                </div>

                <nav class='mobile-navigation-menu' id='mobile-navigation-menu' role='navigation' aria-label='mobile navigation'>
                    <div class='mobile-navigation-menu__top-row'>
                        <button class='mobile-navigation-menu__toggle-button'>
                            <span class='fas fa-times'></span>
                        </button>
                        <a href='https://finaldecisions.org/feed' class='mobile-navigation-menu__top-link'>
                            <span class='fa fa-rss'></span>
                        </a>
                        <a href='https://github.com/bryanlammon' class='mobile-navigation-menu__top-link'>
                            <span class='fab fa-github'></span>
                        </a>
                    </div>

                    <div class='mobile-navigation-links'>
                        <a href='/about'>About</a>
                        <a href=<?php echo get_site_url(null, '#fp-categories', ''); ?>>Categories</a>
                        <a href='/blog'>Archive</a>
                        <a href='/scholarship'>Scholarship</a>
                        <!--<a href='/consulting'>Consulting</a>-->
                        <?php get_search_form(); ?>
                    </div>

                </nav>

            </div>
        </div>
    </header>
