<?php
function tech_custom_chapter_slug($post_link, $post)
{
 if (is_object($post) && 'chapter' == $post->post_type) {
  $parent_post_id = get_field('parent_book', $post->ID);
  $parent_post = get_post($parent_post_id);

  if ($parent_post) {
   $post_link = str_replace("%book%", $parent_post->post_name, $post_link);
  }
 }

 return $post_link;
}
add_filter('post_type_link', 'tech_custom_chapter_slug', 10, 2);