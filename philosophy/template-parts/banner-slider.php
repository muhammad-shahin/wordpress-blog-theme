<?php
$prefix = '_tech_';
$group_key = $prefix . 'banner_content';

// get the group field values
$slide_content = get_post_meta(get_the_ID(), $group_key, true);
?>
<div class="w-full h-[60vh] overflow-hidden my-6 relative">
 <div class="flex w-full translate-x-[0%] duration-300 slide-item">
  <!-- slide 1 -->
  <div class="min-w-full relative ">
   <?php
   $slider_1_image = get_field('slider_1_image');
   if ($slider_1_image) {
    ?>
    <img src="<?php echo esc_url($slider_1_image) ?>" class="absolute top-0 left-0 object-cover mx-auto w-full">
    <?php
   } else {
    ?>
    <img src="https://i.ibb.co/TBVR1RQ/team-member-2.jpg" class="absolute top-0 left-0 object-cover mx-auto w-full">
    <?php
   }
   ?>
  </div>
  <!-- slide 2 -->
  <div class="min-w-full relative">
   <?php
   $slider_2_image = get_field('slider_2_image');
   if ($slider_2_image) {
    ?>
    <img src="<?php echo esc_url($slider_2_image) ?>" class="absolute top-0 left-0 object-cover mx-auto w-full">
    <?php
   } else {
    ?>
    <img src="https://i.ibb.co/TBVR1RQ/team-member-3.jpg" class="absolute top-0 left-0 object-cover mx-auto w-full">
    <?php
   }
   ?>
  </div>
  <!-- slide 3 -->
  <div class="min-w-full relative">
   <?php
   $slider_3_image = get_field('slider_3_image');
   if ($slider_3_image) {
    ?>
    <img src="<?php echo esc_url($slider_3_image) ?>" class="absolute top-0 left-0 object-cover mx-auto w-full">
    <?php
   } else {
    ?>
    <img src="https://i.ibb.co/s9VJSvz/team-member-4.jpg" class="absolute top-0 left-0 object-cover mx-auto w-full">
    <?php
   }
   ?>
  </div>

  <!-- slide created cmb2 meta box -->
  <?php
  // if there is any content then start loop
  if ($slide_content):
   foreach ($slide_content as $slide):
    $title = isset($slide[$prefix . 'title']) ? esc_html($slide[$prefix . 'title']) : '';
    $content = isset($slide[$prefix . 'content']) ? esc_html($slide[$prefix . 'content']) : '';
    $image_url = isset($slide[$prefix . 'image']) ? esc_html($slide[$prefix . 'image']) : '';
    ?>
    <div class="min-w-full relative">
     <div class="absolute top-0 left-0 w-full">
      <img src="<?php echo esc_url($image_url) ?>" class=" object-cover mx-auto w-full">
      <div class="absolute top-0 left-0 w-full h-full bg-black z-[100] opacity-45"></div>
     </div>

     <!-- slide content -->
     <div
      class="w-full max-w-[80%] mx-auto min-h-[60vh] flex flex-col justify-center items-center gap-4 relative z-[100] text-center">
      <h1 class="text-5xl font-semibold text-white">
       <?php echo $title ?>
      </h1>
      <p class="text-xl font-medium text-blue-600">
       <?php echo $content ?>
      </p>
     </div>
    </div>
    <?php
   endforeach;
  endif;
  ?>
 </div>
 <!-- slider buttons -->
 <div
  class="absolute bottom-[20px] left-[50%] translate-x-[-50%] flex justify-center items-center gap-4 slider-buttons">
  <span class="block w-[15px] h-[15px] rounded-full cursor-pointer not-active active"></span>
  <span class="block w-[15px] h-[15px] rounded-full cursor-pointer not-active"></span>
  <span class="block w-[15px] h-[15px] rounded-full cursor-pointer not-active"></span>
  <?php
  if ($slide_content):
   $slide_length = count($slide_content);
   for ($i = 0; $i < $slide_length; $i++) {
    ?>
    <span class="block w-[15px] h-[15px] rounded-full cursor-pointer not-active"></span>
    <?php
   }
  endif;
  ?>
 </div>
</div>