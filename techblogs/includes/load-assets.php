<?php
// setup theme css & js files
function tech_load_assets()
{
 wp_register_style('custom-css', get_template_directory_uri() . '/assets/css/custom.css', array(), VERSION, 'all');
 wp_enqueue_style('custom-css');
 // dashicon
 wp_enqueue_style('dashicons');
 wp_enqueue_style('tech-style', get_stylesheet_uri(), array(), VERSION, 'all');

 // jQuery
 wp_enqueue_script('jQuery');
 wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), VERSION, 'true');

 // tailwind css
 wp_enqueue_script('tailwind-cdn', '//cdn.tailwindcss.com', array(), VERSION, false);
}
add_action("wp_enqueue_scripts", "tech_load_assets");