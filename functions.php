<?php

/*
    Final Decisions Theme

    Functions and definitions
*/

/*
    Add title support.

    Wordpress requires all themes support title-tag. See https://make.wordpress.org/themes/2015/08/25/title-tag-support-now-required.
*/
function theme_slug_setup()
{
    add_theme_support("title-tag");
}
add_action("after_setup_theme", "theme_slug_setup");

/*
    Enqueue all styles and scrips
*/
function my_queue()
{
    // Google Fonts
    // wp_enqueue_style("google_fonts", "https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,700;1,400;1,700&amp;family=Raleway:ital,wght@0,400;0,700;1,400&amp;display=swap");

    // De-register the built-in jQuery and register a more recent version.
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js', true);

    // Register Bootstrap
    wp_enqueue_style("main", get_template_directory_uri() . "/css/main.css");
    wp_enqueue_style("bootstrap-icons", "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css", true);
    wp_enqueue_script("bootstrap-js", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js", true);

    // Register Headroom.js
    wp_enqueue_script("headroomjs", get_template_directory_uri() . "/js/headroom.min.js", true);

    // And finally register my JavaScript
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', true);
}

add_action("wp_enqueue_scripts", "my_queue");

/*
    Add classes to next-post & previous-post links.

    See https://css-tricks.com/snippets/wordpress/add-class-to-links-generated-by-next_posts_link-and-previous_posts_link.

*/
add_filter("next_posts_link_attributes", "posts_link_attributes");
add_filter("previous_posts_link_attributes", "posts_link_attributes");
function posts_link_attributes()
{
    return 'class="my-5 col-5 col-md-3 btn btn-lg btn-outline-light"';
}

/*
    Change the "Read more" text and style.

    See https://codex.wordpress.org/Customizing_the_Read_More.
*/
function modify_read_more_link()
{
    //return "<div class='row'><a class='btn btn-outline-light mx-auto' style='width:180px' href='" . get_permalink() . "'>Continue Reading</a></div>"
    return '<a href="<?php echo get_permalink() ?>">Continue reading....</a>';
}
add_filter("the_content_more_link", "modify_read_more_link");

/*
    Dynamic copyright date.

    See https://www.wpbeginner.com/wp-tutorials/how-to-add-a-dynamic-copyright-date-in-wordpress-footer/.
*/
function dynamic_copyright()
{
    global $wpdb;
    $copyright_dates = $wpdb->get_results("
		SELECT
		YEAR(min(post_date_gmt)) AS firstdate,
		YEAR(max(post_date_gmt)) AS lastdate
		FROM
		$wpdb->posts
		WHERE
		post_status = 'publish'
	");
    $output = "";
    if ($copyright_dates) {
        $copyright = "Copyright " . $copyright_dates[0]->firstdate;
        if ($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
            $copyright .= '-' . $copyright_dates[0]->lastdate;
        }
        $output = $copyright;
    }
    return $output;
}

/*
    Exclude Pages from search.

    See https://www.wpbeginner.com/wp-tutorials/how-to-exclude-pages-from-wordpress-search-results/.
*/
if (!is_admin()) {
    function wpb_search_filter($query)
    {
        if ($query->is_search) {
            $query->set("post_type", "post");
        }
        return $query;
    }
    add_filter("pre_get_posts", "wpb_search_filter");
}
