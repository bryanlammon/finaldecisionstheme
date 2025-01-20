<?php

/*
    Final Decisions Theme

    Footer
*/

?>

<footer>
    <div class="container-fluid text-light bg-dark py-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-5">
                <div>
                    <a class="d-inline-flex mb-2 text-decoration-none" href="/" aria-label="Final Decisions">
                        <span class="text-white" style="font-size:1.75rem; font-weight:700; font-family:'Cormorant Garamond', serif;">final decisions <span style="font-family:'Cormorant SC', serif;">pllc</span></span>
                    </a>
                    <ul class="list-unstyled small">
                        <li class="mb-2"><?php echo dynamic_copyright(); ?></li>
                        <li class="mb-2"><a class="link-light mb-1" href='/legal'>Legal Disclaimers</a></li>
                        <li class="mb-2"><a class="link-light mb-1" href='/copyright'>Copyright Information</a></li>
                        <li class="mb-2"><a class="link-light mb-1" href='/privacy'>Privacy Policy</a></li>
                    </ul>
                </div>

                <div class="pt-md-5">
                    <ul class="list-unstyled">
                        <li class="mb-2"><a class="link-light text-decoration-none" href="/">Home</a></li>
                        <li class="mb-2"><a class="link-light text-decoration-none" href="/about">About</a></li>
                        <li class="mb-2"><a class="link-light text-decoration-none" href="/services">Services</a></li>
                        <li class="mb-2"><a class="link-light text-decoration-none" href="/blog">Blog</a></li>
                        <li class="mb-2"><a class="link-light text-decoration-none" href="/research">Research</a></li>
                    </ul>
                </div>

                <div class="pt-md-5">

                    <ul class="list-unstyled">
                        <li class="mb-2"><a class="link-light text-decoration-none" href="/contact">Contact</a></li>
                        <li class="mb-2"><a class="link-light text-decoration-none" href="https://www.linkedin.com/in/bryan-lammon/">LinkedIn</a></li>
                        <li class="mb-2"><a class="link-light text-decoration-none" href='/feed'>RSS</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>