<?php get_header(); ?>

<!-- a simple blog website theme -->

<body <?php body_class(); ?>>
 <?php get_template_part("hero"); ?>

 <!-- single blog post -->
 <div class="mx-[15%]">
  <?php while (have_posts()) : the_post(); ?>
  <div <?php post_class('p-5 border border-black rounded'); ?>>
   <!-- blog title -->
   <h1 class="text-6xl font-semibold mb-10 text-center text-blue-500"><?php the_title(); ?></h1>
   <!-- blog date, author, tag, image -->
   <div class="flex justify-center items-center flex-col-reverse">

    <div class="max-w-[850px] space-y-6">
     <?php if (has_post_thumbnail()) : ?>
     <?php
       $thumbnail_url = get_the_post_thumbnail_url(null, "larage");
       printf('<a href="%s" data-featherlight="image">', $thumbnail_url);
       the_post_thumbnail('large', array("class" => "w-full"));
       echo '</a>';
       ?>
     <?php else : ?>
     <?php
       printf('<a href="%s" data-featherlight="image">', "https://i.ibb.co/bLPq5Zq/flipcard5.jpg");
       echo '<img src="https://i.ibb.co/bLPq5Zq/flipcard5.jpg" />';
       echo '</a>';
       ?>
     <?php endif; ?>
     <div class="text-base">
      <?php the_content(); ?>
     </div>
    </div>
   </div>
   <?php endwhile; ?>
  </div>


 </div>
 <?php get_footer(); ?>
</body>