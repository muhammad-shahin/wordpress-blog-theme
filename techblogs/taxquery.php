<?php
/**
 * Template Name: Tax Query Example
 */

$tech_query_args = array(
 "post_type" => "book",
 "post_per_page" => -1,
 "tax_query" => array(
  "relation" => "AND", //relation is used for to set relation with two array
  array(
   "relation" => "AND", //relation is used for to set relation with two array
   array(
    "taxonomy" => "language",
    "field" => "slug",
    "terms" => array("english"),
   ),
   array(
    "taxonomy" => "language",
    "field" => "slug",
    "terms" => array("bangla"),
    "operator" => "NOT IN" //this means this query will only return the english  books that are not in bangla category
   )
  ),
  array(
   "taxonomy" => "genre",
   "field" => "slug",
   "terms" => array("self help"),
  ),
// only find the book that are in english language and in the genre of self help
 )
);

$tech_posts = new WP_Query($tech_query_args);
// echo $tech_posts->found_posts;

while ($tech_posts->have_posts()) {
 $tech_posts->the_post();
 the_title();
 echo "<br/>";
}

wp_reset_query();