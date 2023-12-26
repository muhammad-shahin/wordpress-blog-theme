<!DOCTYPE html>
<html lang="en">

<head>
 <?php get_header(); ?>
</head>

<body>
 <?php get_template_part('/template-parts/nav-menu'); ?>

 <div class="container mx-auto mt-10">
  <?php while (have_posts()) {
   the_post();
  } ?>
  <article <?php post_class(); ?>>
   <header>
    <h1 class="text-4xl font-semibold uppercase">
     <?php the_title(); ?>
    </h1>
    <p class="text-gray-500 pt-4">
     <?php
     printf(
      esc_html__('Published On : %s', 'tech'),
      '<time datetime="' . esc_attr(get_the_date('c')) . '">' . esc_html(get_the_date()) . '</time>'
     );
     ?>
    </p>
    <p class="text-gray-500 pb-6">
     <?php esc_html_e('Author:', 'tech'); ?>
     <?php the_author(); ?>
    </p>
    <!-- post thumbnail -->
    <div class="mx-auto relative">
     <?php
     if (has_post_thumbnail()) {
      echo get_the_post_thumbnail(get_the_ID(), 'large', array('class' => 'max-h-[500px] object-cover mx-auto'));
      // the_post_thumbnail('large');
     }
     ?>
     <div class="absolute bottom-[-24px] left-[50%] translate-x-[-50%]">
      <div class="border-4 border-solid border-white bg-white rounded-full w-[48px] h-[48px] my-auto overflow-hidden">
       <?php
       $tech_format = get_post_format();
       if ($tech_format == "image") {
        ?>
        <span
         class="dashicons dashicons-format-image  text-purple-500 text-[48px] translate-x-[-2px] translate-y-[-1px]"></span>
        <?php
       } else if ($tech_format == "gallery") {
        ?>
         <span
          class="dashicons dashicons-format-gallery  text-purple-500 text-[48px] translate-x-[-2px] translate-y-[-1px]"></span>
        <?php
       } else if ($tech_format == "video") {
        ?>
          <span
           class="dashicons dashicons-format-video  text-purple-500 text-[48px] translate-x-[-2px] translate-y-[-1px]"></span>
        <?php
       } else if ($tech_format == "audio") {
        ?>
           <span
            class="dashicons dashicons-format-audio  text-purple-500 text-[48px] translate-x-[-2px] translate-y-[-1px]"></span>
        <?php
       } else {
        ?>
           <span
            class="dashicons dashicons-admin-site  text-purple-500 text-[48px] translate-x-[-2px] translate-y-[-1px]"></span>
        <?php
       }
       ?>

      </div>
     </div>
   </header>
   <hr class="h-[2px] text-black mt-8">

   <div class="content mt-6">
    <?php the_content(); ?>
   </div>

   <!-- article footer -->
   <footer class="mt-8">
    <?php
    wp_link_pages(array(
     'before' => '<nav class="page-links">' . esc_html__('Pages:', 'your-theme-text-domain'),
     'after' => '</nav>',
    ));
    ?>
   </footer>
  </article>
 </div>
 <?php get_footer(); ?>
</body>

</html>