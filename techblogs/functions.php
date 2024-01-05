<?php
// include tgm
require_once get_theme_file_path("/inc/tgm.php");
// include meta box created by acf
require_once get_theme_file_path("/inc/acf-mb.php");
// include meta box created by cmb2
require_once get_theme_file_path("/inc/cmb2-mb.php");
// include meta box created by cmb2
require_once get_theme_file_path("/inc/cmb2-attached-posts.php");
// basic theme setup
if (site_url() == "http://localhost/practice-site") {
  define("VERSION", time());
} else {
  define("VERSION", wp_get_theme("Version"));
}



// include theme setup
require get_template_directory() . "/inc/theme-setup.php";

// include load assets
require get_template_directory() . "/inc/load-assets.php";

// include customize logo
require get_template_directory() . "/inc/customize-logo.php";

// include nav menu
require get_template_directory() . "/inc/nav-menu.php";

// include logo position
require get_template_directory() . "/inc/logo-position.php";

// filter to hide acf menu from admin dashboard
// add_filter('acf/settings/show_admin', '__return_false');

// include blog search form
require get_template_directory() . "/inc/search-form.php";

// filter hook to add custom slug for book type post
require get_template_directory() . "/inc/custom-book-slug.php";


// footer tags heading & tag items
function tech_footer_language_heading($title)
{
  if (is_post_type_archive('book') || is_tax('language')) {
    $title = __("Book By Language", "tech");
  }
  return $title;
}
add_filter("tech_footer_tag_heading", 'tech_footer_language_heading');

function tech_footer_language_terms($tags)
{
  if (is_post_type_archive('book') || is_tax('language')) {
    $tags = get_terms(
      array(
        'taxonomy' => 'language',
        'hide_empty' => false
      )
    );
  }
  return $tags;
}
add_filter("tech_footer_tag_terms", 'tech_footer_language_terms');