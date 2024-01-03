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

// filter hook to add custom slug for chapter type post
require get_template_directory() . "/inc/custom-chapter-slug.php";

// function tech_custom_chapter_slug($post_link, $id)
// {
//   $p = get_post($id);
//   if (is_object($p) && 'chapter' == get_post_type($id)) {
//     $parent_post_id = get_field('parent_book');
//     $parent_post = get_post($parent_post_id);
//     if ($parent_post) {
//       $post_link = str_replace("%book%", $parent_post->post_name, $post_link);
//     }
//     return $post_link;
//   }
// }
// add_filter('post_type_link', 'tech_custom_chapter_slug', 1, 2);

// cmb2 attached posts
// require get_template_directory() . "/inc/cmb2-attached-posts.php";