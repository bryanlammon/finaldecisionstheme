<?php

//
// Final Decisions rev 3
// Functions and definitions
// Last update: Rev 3a1 on August 24, 2019
//



// Add title support
//	Wordpress requires all themes support title-tag
//	https://make.wordpress.org/themes/2015/08/25/title-tag-support-now-required/
function theme_slug_setup()
{
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'theme_slug_setup');



// Enqueue all of the styles and scripts
function my_queue()
{

    // Google Fonts
    //wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css?family=Cormorant+Garamond:600,600i,700,700i|Raleway:400,700');
    wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,700;1,700&family=EB+Garamond:ital,wght@0,400;0,700;1,400;1,700&family=Raleway:wght@700&display=swap');
    // Normalize CSS
    wp_enqueue_style('normalizecss', get_template_directory_uri() . '/css/normalize.css');
    // Font Awesome
    wp_enqueue_style('font_awesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css');
    // Bigfoot default CSS
    wp_enqueue_style('bigfootcss', get_template_directory_uri() . '/css/bigfoot-default.css');
    // My CSS
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');

    // Need a newer jQuery than Wordpress's one to use Bigfoot
    // So deregister the built-in jQuery
    wp_deregister_script('jquery');
    // Register a more recent version of jQuery
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', true);

    // Register Bigfoot's JavaScript
    wp_enqueue_script('bigfootjs', get_template_directory_uri() . '/js/bigfoot.min.js', true);
    // And finally register my JavaScript
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', true);
}

add_action('wp_enqueue_scripts', 'my_queue');



// Add Bigfoot without a plugin
// Gotten from https://zemartino.tumblr.com/post/110254698520/use-bigfootjs-in-wordpress-without-a-plugin
function add_head()
{ ?>
    <script type="text/javascript">
        jQuery.bigfoot();
    </script>
    <link rel="me" href="https://mastodon.social/@BryanLammon">
<?php }
add_action('wp_head', 'add_head');



// Add classes to next-post & previous-post links
// From https://css-tricks.com/snippets/wordpress/add-class-to-links-generated-by-next_posts_link-and-previous_posts_link
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes()
{
    return 'class="link-button link-button--border"';
}



// Change the "Read more" text and style
// From https://codex.wordpress.org/Customizing_the_Read_More
function modify_read_more_link()
{
    return '<a class="more-link link-button link-button--border link-button--centered" href="' . get_permalink() . '">Continue Reading</a>';
}
add_filter('the_content_more_link', 'modify_read_more_link');



// Dynamic copyright date
// From https://www.wpbeginner.com/wp-tutorials/how-to-add-a-dynamic-copyright-date-in-wordpress-footer/
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
    $output = '';
    if ($copyright_dates) {
        $copyright = "Copyright " . $copyright_dates[0]->firstdate;
        if ($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
            $copyright .= '-' . $copyright_dates[0]->lastdate;
        }
        $output = $copyright;
    }
    return $output;
}

// Exclude Pages from search
// From https://www.wpbeginner.com/wp-tutorials/how-to-exclude-pages-from-wordpress-search-results/
if (!is_admin()) {
    function wpb_search_filter($query)
    {
        if ($query->is_search) {
            $query->set('post_type', 'post');
        }
        return $query;
    }
    add_filter('pre_get_posts', 'wpb_search_filter');
}



?>
