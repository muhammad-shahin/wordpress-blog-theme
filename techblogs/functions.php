<?php
// include tgm
require_once get_theme_file_path("/inc/tgm.php");
// include meta box created by acf
require_once get_theme_file_path("/inc/acf-mb.php");
// include meta box created by cmb2
require_once get_theme_file_path("/inc/cmb2-mb.php");
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