<?php

/*
    Final Decisions

    Sidebar template for blog content.
*/

?>

<div class="col-lg-3" style="max-width:620px;">
    <div class="row p-2 p-lg-0">
        <div class="d-flex flex-column mb-3 p-4 bg-light text-black rounded-3">
            <p>Final Decisions PLLC is an appellate boutique and consultancy that focuses on federal appellate jurisdiction. We partner with lawyers facing appellate-jurisdiction issues, working as consultants or co-counsel to achieve positive outcomes on appeal. Contact us to learn how we can work together.</p>
            <a class="m-2 btn btn-outline-primary mx-auto" style="width:180px" href="/about">Learn More</a>
            <a class="m-2 btn btn-secondary mx-auto" style="width:180px" href="/contact">Contact</a>
        </div>

        <hr>

        <div class="d-flex flex-column mb-5 p-4">
            <h3 class="text-center">Post Categories</h3>
            <ul>
                <?php wp_list_categories(array(
                    'title_li' => ''
                )) ?>
            </ul>
        </div>
    </div>
</div>