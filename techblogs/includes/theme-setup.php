<?php
function tech_setup_theme()
{
 // theme title
 load_theme_textdomain("tech");
 add_theme_support("title-tag");
 add_theme_support("post-thumbnails");
 add_theme_support("post-formats", array("image", "quote", "audio ", "video", "gallery"));
}

add_action("after_setup_theme", "tech_setup_theme");