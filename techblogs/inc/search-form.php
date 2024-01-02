<?php
function tech_search_form($form)
{
 $homeurl = home_url('/');
 $post_type = <<<PT
 <input type="hidden" value="post" name="post_type">
 PT;
 if (is_post_type_archive('book')) {
  $post_type = <<<PT
  <input type="hidden" value="book" name="post_type">
  PT;
 }
 $newform = <<<FORM
<form method="get" action="{$homeurl}" class="relative flex justify-center items-center gap-3">
      <input type="text" name="s" class="px-5 py-2 bg-gray-100 rounded outline-none min-w-[320px]" placeholder="Search...">
      {$post_type}
      <button type="submit" class="search-submit dashicons dashicons-search text-[28px] text-purple-600 flex justify-center items-center cursor-pointer absolute right-2 top-[50%] translate-y-[-50%]"></button>
    </form>
FORM;
 return $newform;
}
add_action("get_search_form", "tech_search_form");