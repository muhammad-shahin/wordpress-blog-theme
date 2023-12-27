<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>
  <?php the_title(); ?>
 </title>
 <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
 <!-- header with nav bar -->
 <?php get_template_part('template-parts/nav-menu') ?>

 <main>
  <!-- banner slider -->
  <?php get_template_part('template-parts/banner-slider') ?>
 </main>
 <?php get_footer(); ?>
</body>

</html>