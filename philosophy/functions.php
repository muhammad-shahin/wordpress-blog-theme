<?php
// include tgm
require_once get_theme_file_path("/includes/tgm.php");
// include meta box created by acf
require_once get_theme_file_path("/includes/acf-mb.php");
// include meta box created by cmb2
require_once get_theme_file_path("/includes/cmb2-mb.php");
// basic theme setup
if (site_url() == "http://localhost/practice-site") {
 define("VERSION", time());
} else {
 define("VERSION", wp_get_theme("Version"));
}



// include theme setup
require get_template_directory() . "/includes/theme-setup.php";

// include load assets
require get_template_directory() . "/includes/load-assets.php";

// include customize logo
require get_template_directory() . "/includes/customize-logo.php";

// include nav menu
require get_template_directory() . "/includes/nav-menu.php";

// include logo position
require get_template_directory() . "/includes/logo-position.php";

// filter to hide acf menu from admin dashboard
// add_filter('acf/settings/show_admin', '__return_false');
