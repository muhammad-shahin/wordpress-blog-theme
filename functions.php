<?php
function change_case($text)
{
 return strtoupper($text);
}

function practice_bootstrapping()
{
 load_theme_textdomain("practice");
 add_theme_support("post-thumbnails");
 add_theme_support("title-tag");
}

add_action("after_setup_theme", "practice_bootstrapping");

// this way we can add internal and external scripts
function practice_assets()
{
 wp_enqueue_script("tailwind", "//cdn.tailwindcss.com");
 wp_enqueue_style("practice_css", get_stylesheet_uri());
}
add_action("wp_enqueue_scripts", "practice_assets");
