<?php wp_footer(); ?>
<footer class="bg-gray-500 text-white font-medium text-center flex justify-evenly items-center">
 <!-- left side -->
 <div>
  <?php
  if (is_active_sidebar("footer_left")) {
   dynamic_sidebar("footer_left");
  }
  ?>
 </div>
 <!-- right side -->
 <div>
  <?php
  if (is_active_sidebar("footer_right")) {
   dynamic_sidebar("footer_right");
  }
  ?>
 </div>

 <!-- social links menu -->
 <div>
  <?php
  wp_nav_menu(
   array(
    "theme_location" => "footermenu",
    "menu_id" => "footermenu-container",
    "menu_class" => "flex justify-center items-center gap-6 underline text-white",
   ));
  ?>
 </div>
</footer>
</body>

</html>