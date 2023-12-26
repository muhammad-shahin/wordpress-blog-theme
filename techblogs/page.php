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

 <!-- banner slider -->
 <main>
  <div class="w-full h-[60vh] overflow-hidden my-6 relative">
   <div class="flex w-full translate-x-[0%] duration-300 slide-item">
    <!-- slide 1 -->
    <div class="min-w-full ">
     <?php
     $slider_1_image = get_field('slider_1_image');
     if ($slider_1_image) {
      ?>
      <img src="<?php echo esc_url($slider_1_image) ?>" class="object-cover mx-auto w-full">
      <?php
     } else {
      ?>
      <img src="https://i.ibb.co/TBVR1RQ/team-member-2.jpg" class="object-cover mx-auto w-full">
      <?php
     }
     ?>
    </div>
    <!-- slide 2 -->
    <div class="min-w-full">
     <?php
     $slider_2_image = get_field('slider_2_image');
     if ($slider_2_image) {
      ?>
      <img src="<?php echo esc_url($slider_2_image) ?>" class="object-cover mx-auto w-full">
      <?php
     } else {
      ?>
      <img src="https://i.ibb.co/TBVR1RQ/team-member-3.jpg" class="object-cover mx-auto w-full">
      <?php
     }
     ?>
    </div>
    <!-- slide 3 -->
    <div class="min-w-full">
     <?php
     $slider_3_image = get_field('slider_3_image');
     if ($slider_3_image) {
      ?>
      <img src="<?php echo esc_url($slider_3_image) ?>" class="object-cover mx-auto w-full">
      <?php
     } else {
      ?>
      <img src="https://i.ibb.co/s9VJSvz/team-member-4.jpg" class="object-cover mx-auto w-full">
      <?php
     }
     ?>
    </div>
   </div>
   <!-- slider buttons -->
   <div
    class="absolute bottom-[20px] left-[50%] translate-x-[-50%] flex justify-center items-center gap-4 slider-buttons">
    <span class="block w-[15px] h-[15px] rounded-full cursor-pointer not-active active"></span>
    <span class="block w-[15px] h-[15px] rounded-full cursor-pointer not-active"></span>
    <span class="block w-[15px] h-[15px] rounded-full cursor-pointer not-active"></span>
   </div>
  </div>
 </main>
 <?php get_footer(); ?>
</body>

</html>