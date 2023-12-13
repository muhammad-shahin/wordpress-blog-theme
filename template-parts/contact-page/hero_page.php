<div class="text-center py-10 mb-10 bg-no-repeat w-full bg-cover bg-center text-white relative page-banner">
 <!-- title & tagline -->
 <div class="header relative z-[100]">
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
 <div class="text-center font-medium text-blue-500 py-8  relative z-[100]">
  <?php
  wp_nav_menu(
   array(
    'theme_location' => 'topmenu',
    'menu_id' => 'topmenu-container',
    'menu_class' => 'flex justify-center items-center gap-6',
   )
  );
  ?>
 </div>
 <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50"></div>
</div>