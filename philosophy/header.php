<?php
$title = get_bloginfo('name');
$description = get_bloginfo('description');
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <title>
  <?php
  echo esc_html("$title | $description");
  ?>
 </title>
 <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>