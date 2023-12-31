<?php
// setup theme css & js files
function tech_load_assets()
{
 // tailwind css
 wp_enqueue_script('tailwind-cdn', '//cdn.tailwindcss.com', array(), VERSION, false);
 // custom.css & style.css
 wp_register_style('custom-css', get_template_directory_uri() . '/assets/css/custom.css', array(), VERSION, 'all');
 wp_enqueue_style('custom-css');
 wp_enqueue_style('tech-style', get_stylesheet_uri(), array(), VERSION, 'all');
 // dashicon
 wp_enqueue_style('dashicons');
 // jQuery
 wp_enqueue_script('jquery');
 wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), VERSION, true);

}
add_action("wp_enqueue_scripts", "tech_load_assets");

