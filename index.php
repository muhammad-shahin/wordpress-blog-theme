<?php get_header(); ?>

<!-- a simple blog website theme -->

<body <?php body_class(); ?>>
 <?php get_template_part("hero"); ?>

 <!-- blog posts -->
 <div class="mx-[15%] space-y-8 test-class">
  <?php while (have_posts()) {
   the_post(); ?>
   <div <?php post_class(); ?> class="border-2 border-black rounded">
    <!-- blog title -->
    <a class="text-blue-500" href="<?php the_permalink(); ?>">
     <h1 class="text-6xl font-semibold mb-10"><?php the_title(); ?></h1>
    </a>
    <!-- blog date, author, tag, image -->
    <div class="flex justify-between items-start">
     <div class="space-y-3">
      <p class="text-xl font-semibold leading-none uppercase"><span class="text-lg">Author : </span><?php the_author(); ?></p>
      <p class="text-lg font-medium text-gray-700">
       <?php if (get_the_date()) {
        echo get_the_date();
       } else {
        echo "No Date Found";
       } ?>
      </p>
      <div class="text-sm font-medium p-1 px-3 bg-gray-200 rounded">
       <?php echo get_the_tag_list("<ul class='text-blue-500'> <li>", "</li><li >", "</li></ul>"); ?>
      </div>
     </div>

     <div class="max-w-[850px] space-y-6">
     <?php if (has_post_thumbnail()) : ?>
       <?php
        $thumbnail_url = get_the_post_thumbnail_url( null, "larage" );
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
       <?php
       if (is_single()) {
        the_content();
       } else {
        if (!post_password_required()) {
         the_excerpt();
        } else {
         echo get_the_password_form();
        }
       }
       ?>

      </div>
     </div>
    </div>
   </div>
  <?php } ?>
  <!-- post pagination -->
  <div class="w-fit mx-auto pagination-container flex justify-center items-center gap-3">
   <?php the_posts_pagination(array(
    "screen_reader_text" => ' ',
    "prev_text" => "<div class='w-[32px] h-[32px] bg-blue-500 rounded-full flex justify-center items-center'>➡️</div>",
    "next_text" => "<div class='w-[32px] h-[32px] bg-blue-500 rounded-full flex justify-center items-center'>⬅️</div>"
   )); ?>
  </div>
 </div>


 <?php get_footer(); ?>