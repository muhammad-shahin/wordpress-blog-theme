<div class="text-center py-10 mb-10 bg-no-repeat w-full bg-cover bg-center text-white relative header">
 <!-- custom logo -->
 <?php
 if (current_theme_supports('custom-logo')) {
 ?>
  <div class="header-logo w-fit mx-auto rounded-full overflow-hidden relative z-[100]">
   <?php the_custom_logo(); ?>
  </div>
 <?php
 }
 ?>

 <!-- title & tagline -->
 <div class="space-y-4 relative z-[100] title-tag">
  <h3 class="text-2xl">
   <?php
   bloginfo("description");
   ?>
  </h3>
  <a href="<?php echo site_url(); ?>">
   <h1 class="text-6xl font-bold">
    <?php
    bloginfo("name");
    ?>
   </h1>
  </a>
 </div>
 <!-- overlay effect -->
 <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50"></div>
</div>
<div class="text-center font-medium text-blue-500 py-8">
 <?php
 wp_nav_menu(
  array(
   'theme_location' => 'topmenu',
   'menu_id' => 'topmenu-container',
   'menu_class' => 'flex justify-center items-center gap-6',
  )
 );
 ?>
 <textarea name="" id="" cols="30" rows="10"></textarea>
</div>
<hr class="mx-[5%] my-10" />