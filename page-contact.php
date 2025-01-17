<?php

/*
    Final Decisions Theme

    About Page
*/

get_header();
?>

<main>
    <!-- Hero section -->
    <section class="d-flex p-5 min-vh-20" lc-helper="background" style="background:url(<?php bloginfo('template_url'); ?>/images/banner-7-3.png) center / cover no-repeat">
        <div class="container d-flex justify-content-center align-items-center">
            <h1 class="display-1 text-center pt-5">Contact Us</h1>
        </div>
    </section>

    <div class="container pt-1 pb-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
        </nav>
    </div>

    <!-- Contact section -->
    <div class="container-fluid px-0 pt-1 pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 d-flex flex-column align-items-center" style="max-width:620px">
                    <div class="mx-auto">
                        <img class="mb-3 img-fluid rounded-3" src="https://finaldecisions.org/wp-content/themes/finaldecisionstheme/images/lammon2.png" alt="Photo of Bryan Lammon">
                    </div>
                    <p class="lead text-center">Contact Final Decisions PLLC to learn how we can help with your appellate-jurisdiction needs.</p>
                    <a class="btn btn-lg btn-secondary" style="width:180px" id="contact" href="">Email Us</a>
                    <script>
                        var encEmail = "Y29udGFjdEBmaW5hbGRlY2lzaW9ucy5vcmc=";
                        const form = document.getElementById("contact");
                        form.setAttribute("href", "mailto:".concat(atob(encEmail)));
                    </script>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>