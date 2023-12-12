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
 wp_enqueue_style("practice_assets", get_stylesheet_uri() . '/style.css');
}
add_action("wp_enqueue_scripts", "practice_assets");

// sidebar
function practice_sidebar()
{
 register_sidebar(array(
  'name' => __('Single Post Sidebar', 'practice'),
  'id' => 'sidebar-1',
  'description' => __('Right Sidebar', 'practice'),
  'before_widget' => '<section id="%1$s" class="widget %2$s">',
  'after_widget' => '</section>',
  'before_title' => '<h2 class="widget-title">',
  'after_title' => '</h2>',
 ));
}
add_action("widgets_init", "practice_sidebar");
