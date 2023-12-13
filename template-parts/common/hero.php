 <!-- title & tagline -->
 <div class="text-center space-y-3 mt-10 header">
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
 </div>
 <hr class="mx-[5%] my-10" />