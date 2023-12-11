<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <?php wp_head(); ?>
</head>

<!-- a simple blog website theme -->

<body <?php body_class(); ?> class="p-10">
 <!-- title & tagline -->
 <div class="text-center space-y-3">
  <h3 class="text-2xl">
   <?php
   bloginfo("description");
   ?>
  </h3>
  <h3 class="text-6xl font-bold">
   <?php
   bloginfo("name");
   ?>
  </h3>
 </div>
 <hr class="mx-[5%] my-10" />

 <!-- blog posts -->
 <div class="mx-[15%] space-y-8">
  <?php while (have_posts()) {
   the_post(); ?>
   <div <?php post_class(); ?>>
    <!-- blog title -->
    <h1 class="text-6xl font-semibold mb-10"><?php the_title(); ?></h1>
    <!-- blog date, author, tag, image -->
    <div class="flex justify-between items-start">
     <div class="space-y-3">
      <p class="text-xl font-semibold leading-none uppercase"><span class="text-lg">Author : </span><?php the_author(); ?></p>
      <p class="text-lg font-medium text-gray-700"><?php if(the_date()){ the_date(); } else {echo "No Date Found";} ?></p>
      <p class="text-sm font-medium p-1 px-3 bg-gray-200 rounded"><?php the_tags() ?></p>
     </div>

     <div class="max-w-[850px] space-y-6">
      <?php if (has_post_thumbnail()) {
       the_post_thumbnail('large');
      } else {
       echo '<img src="https://i.ibb.co/bLPq5Zq/flipcard5.jpg" />';
      } ?>
      <p class="text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo fugit repellat quisquam ipsum non, culpa explicabo fuga ex eligendi tempore unde nobis, id mollitia reiciendis aliquid iste exercitationem itaque? Tempore totam omnis distinctio et tenetur excepturi aliquid repellendus. Voluptate deleniti voluptas quas, illo quibusdam repellendus nihil? Ea minima quidem similique perspiciatis aliquid saepe ut totam ducimus, earum maiores, facilis sit explicabo maxime optio mollitia adipisci molestiae ipsam vitae repudiandae praesentium alias! Amet omnis, officiis eligendi cumque iusto distinctio fuga porro dolores debitis, repellendus provident. Labore, deleniti minus aut possimus cupiditate itaque deserunt est, dicta a tempora aspernatur assumenda repellendus pariatur.</p>
     </div>
    </div>
   </div>
  <?php } ?>

 </div>

 <?php wp_footer(); ?>
</body>

</html>