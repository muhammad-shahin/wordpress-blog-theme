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
            <div
              class="border-4 border-solid border-white bg-white rounded-full w-[48px] h-[48px] my-auto overflow-hidden">
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

      <!-- book content & chapters link -->
      <div class="content mt-6">
        <?php the_content(); ?>

        <h3 class="text-5xl font-semibold">Chapters</h3>
        <?php
        $tech_chapter_args = array(
          'post_type' => 'chapter',
          'post_per_page' => -1,
          'meta_key' => 'parent_book',
          'meta_value' => get_the_ID()
        );

        $tech_chapters = new WP_Query($tech_chapter_args);
        // echo $tech_chapters->found_post;
        while ($tech_chapters->have_posts()) {
          $tech_chapters->the_post();
          $tech_chapter_link = get_the_permalink();
          $tech_chapter_title = get_the_title();

          printf("<a class='underline text-2xl text-blue-500 block w-fit mt-4' href='%s'>%s</a>", $tech_chapter_link, $tech_chapter_title);
        }
        wp_reset_query();
        ?>


        <!-- Chapters By CMB2 Attached Posts -->
        <h3 class="text-5xl font-semibold mt-10">Chapters By CMB2 Attached Posts</h3>
        <?php
        $tech_cmb2_chapters = get_post_meta(get_the_ID(), 'attached_cmb2_attached_posts', true);
        if ($tech_cmb2_chapters) {
          foreach ($tech_cmb2_chapters as $tech_chapter) {
            $tech_chapter_link = get_the_permalink($tech_chapter);
            $tech_chapter_title = get_the_title($tech_chapter);
            printf("<a class='underline text-2xl text-blue-500 block w-fit mt-4' href='%s'>%s</a>", $tech_chapter_link, $tech_chapter_title);
          }
        }
        ?>
      </div>

      <!-- article footer -->
      <footer class="mt-8">
        <?php
        wp_link_pages(
          array(
            'before' => '<nav class="page-links">' . esc_html__('Pages:', 'your-theme-text-domain'),
            'after' => '</nav>',
          )
        );
        ?>
      </footer>

      <!-- author box -->
      <div class="p-5 border-2 flex justify-start items-center gap-8">
        <!-- add author named email and image here -->
        <div>
          <?php
          if (function_exists('the_field')):
            echo get_avatar(get_the_author_meta('user_email'), 120, '', '', array('class' => 'rounded-full min-w-[120px] min-h-[120px]'));
          endif;
          ?>
        </div>
        <div class="space-y-2">
          <p class="uppercase text-lg font-medium">
            <?php the_author(); ?>
          </p>
          <p class="capitalize text-lg text-gray-500">
            <?php the_author_meta('description'); ?>
          </p>
          <!-- author social links -->
          <?php
          if (function_exists('the_field')): ?>
            <div class="flex justify-start items-center gap-3">
              <a href="<?php the_field('facebook', 'user_' . get_the_author_meta('ID')) ?>"
                class="block bg-gray-200 w-[32px] rounded-full"><span
                  class="dashicons dashicons-facebook-alt w-[32px] h-[32px] text-blue-600 flex justify-center items-center"></span></a>
              <a href="<?php the_field('instagram', 'user_' . get_the_author_meta('ID')) ?>"
                class="block bg-gray-200 w-[32px] rounded-full"><span
                  class="dashicons dashicons-instagram w-[32px] h-[32px] text-pink-600 flex justify-center items-center"></span></a>
              <a href="<?php the_field('linkedin', 'user_' . get_the_author_meta('ID')) ?>"
                class="block bg-gray-200 w-[32px] rounded-full"><span
                  class="dashicons dashicons-linkedin w-[32px] h-[32px] text-blue-500 flex justify-center items-center"></span></a>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </article>
  </div>
  <?php get_footer(); ?>
</body>

</html>