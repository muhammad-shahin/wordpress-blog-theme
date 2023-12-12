<?php get_header(); ?>

<!-- a simple blog website theme -->

<body <?php body_class(); ?>>
 <?php get_template_part("hero"); ?>

 <!-- single blog post -->
 <div class="mx-[5%] space-y-8 py-10 flex justify-between items-start">
  <?php while (have_posts()) : the_post(); ?>
   <div <?php post_class('p-5 border border-black rounded'); ?>>
    <!-- blog title -->
    <h1 class="text-6xl font-semibold mb-10 text-center text-blue-500"><?php the_title(); ?></h1>
    <!-- blog date, author, tag, image -->
    <div class="flex justify-center items-center flex-col-reverse">
     <div class="flex justify-between items-center gap-8 py-5">
      <p class="text-xl font-semibold leading-none uppercase">
       <span class="text-lg">Author : </span><?php the_author(); ?>
      </p>
      <p class="text-lg font-medium text-gray-700">
       <?php echo get_the_date(); ?>
      </p>
      <div class="text-sm font-medium p-1 px-3 bg-gray-200 rounded">
       <?php echo get_the_tag_list("<ul class='text-blue-500  flex justify-between items-center gap-3'> <li>", "</li><li >", "</li></ul>"); ?>
      </div>
     </div>

     <div class="max-w-[850px] space-y-6">
      <?php if (has_post_thumbnail()) : ?>
       <?php the_post_thumbnail('large'); ?>
      <?php else : ?>
       <img src="https://i.ibb.co/bLPq5Zq/flipcard5.jpg" />
      <?php endif; ?>
      <div class="text-base">
       <?php the_content(); ?>
       <!-- next previous post navigate button -->
       <div class="flex justify-between py-4">
        <div class="px-5 py-2 bg-purple-500 rounded-full text-white"><?php previous_post_link('%link', 'Previous Post', true); ?></div>
        <div class="px-5 py-2 bg-blue-500 rounded-full text-white"><?php next_post_link('%link', 'Next Post', true); ?></div>
       </div>
      </div>
     </div>
    </div>
   <?php endwhile; ?>

   <!-- comment -->
   <?php if (comments_open()) : ?>
    <div class="w-fit mx-auto">
     <?php comments_template(); ?>
    </div>
   <?php endif; ?>
   </div>

   <!-- sidebar -->
   <div>
    <?php if (is_active_sidebar("sidebar-1")) {
     dynamic_sidebar("sidebar-1");
    }
    ?>
   </div>
 </div>

 <?php get_footer(); ?>