<?php

if(site_url() == "http://localhost/practice-site"){
 define("VERSION", time());
}else{
 define("VERSION", wp_get_theme("Version"));
}

function change_case($text)
{
 return strtoupper($text);
}

function practice_bootstrapping()
{
 load_theme_textdomain("practice");
 add_theme_support("post-thumbnails");
 add_theme_support("title-tag");

 // register new menu
 register_nav_menu("topmenu", __("Top Menu", 'practice'));
 register_nav_menu("footermenu", __("Footer Menu", 'practice'));
}

add_action("after_setup_theme", "practice_bootstrapping");

// this way we can add internal and external scripts
function practice_assets()
{
 wp_enqueue_style("practice", get_stylesheet_uri(), null, VERSION);
 wp_enqueue_style("featherlight-css","//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.css");
 
 // external js
 wp_enqueue_script("tailwind", "//cdn.tailwindcss.com");
 wp_enqueue_script("featherlight-js", "//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.js", array("jquery"), "0.0.1", true);

 // internal js
  // old way
 // wp_enqueue_script("practice-main", get_template_directory_uri()."/assets/js/main.js", null, "0.0.1", true);
 wp_enqueue_script("practice-main", get_theme_file_uri("/assets/js/main.js"), array("jquery", "featherlight-js"), "0.0.1", true); // new way (php 4.+)

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

function practice_footer_left()
{
 register_sidebar(array(
  'name' => __('Footer Left Sidebar', 'practice'),
  'id' => 'footer_left',
  'description' => __('Footer Left Sidebar', 'practice'),
  'before_widget' => '<section id="%1$s" class="widget %2$s">',
  'after_widget' => '</section>',
  'before_title' => '<h2 class="widget-title">',
  'after_title' => '</h2>',
 ));
}
add_action("widgets_init", "practice_footer_left");

function practice_footer_right()
{
 register_sidebar(array(
  'name' => __('Footer Right Sidebar', 'practice'),
  'id' => 'footer_right',
  'description' => __('Footer Right Sidebar', 'practice'),
  'before_widget' => '<section id="%1$s" class="widget %2$s">',
  'after_widget' => '</section>',
  'before_title' => '<h2 class="widget-title">',
  'after_title' => '</h2>',
 ));
}
add_action("widgets_init", "practice_footer_right");

// add filter hook

// this filter will run before printing the excerpt and will check is it password protected or not
function practice_the_excerpt($excerpt)
{
 if (!post_password_required()) {
  return $excerpt;
 } else {
  echo get_the_password_form();
 }
}
add_filter("the_excerpt", "practice_the_excerpt");

function practice_protected_title_change(){
return "%s";
}
// remove protected keyword from post title
add_filter("protected_title_format", "practice_protected_title_change");

// add custom css class into wordpress nav_menu_items <li> tag

function practice_menu_item_class($classes, $item){
$classes[] = "hover:scale-[1.03] hover:font-bold hover:underline duration-300 hover:text-purple-500"; //pass your css classes here
return $classes;
}
add_filter("nav_menu_css_class", "practice_menu_item_class", 10, 4);