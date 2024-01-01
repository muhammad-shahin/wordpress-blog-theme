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

// blog search form
function tech_search_form($form)
{
 $homeurl = home_url('/');
 $newform = <<<FORM
<form method="get" action="{$homeurl}" class="relative flex justify-center items-center gap-3">
      <input type="text" name="s" class="px-5 py-2 bg-gray-100 rounded outline-none min-w-[320px]" placeholder="Search Blog">
      <button type="submit" class="search-submit dashicons dashicons-search text-[28px] text-purple-600 flex justify-center items-center cursor-pointer absolute right-2 top-[50%] translate-y-[-50%]"></button>
    </form>
FORM;
 return $newform;
}
add_action("get_search_form", "tech_search_form");
