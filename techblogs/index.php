<!DOCTYPE html>
<html lang="en">

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- header with nav bar -->
  <?php get_template_part('template-parts/nav-menu') ?>

  <!-- show latest post here -->
  <section class="lg:mx-[15%] mx-[5%] grid lg:grid-cols-3 md:grid-col-2 grid-cols-1 py-20 gap-10">
    <?php
    while (have_posts()) {
      the_post();
      ?>
      <div class="<?php post_class(); ?>">
        <a href="<?php the_permalink(); ?>" class="block shadow-xl cursor-pointer hover:-translate-y-2 duration-300">

          <!-- post thumbnail -->
          <div class="mx-auto relative">
            <?php
            if (has_post_thumbnail()) {
              echo get_the_post_thumbnail(get_the_ID(), 'large', array('class' => 'h-[320px] object-cover'));
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
          </div>

          <!-- post content -->
          <div class="text-center py-10 px-[2%] space-y-4">
            <p class="font-medium uppercase text-gray-500">
              <?php the_author(); ?>
            </p>
            <h1 class="text-2xl font-semibold uppercase h-[120px]">
              <?php the_title(); ?>
            </h1>
            <!-- published date  -->
            <p class="font-medium uppercase text-gray-500">
              <?php echo esc_html(get_the_date('F j, Y')); ?>
            </p>
          </div>
        </a>
      </div>
    <?php } ?>

    <!-- add pagination links -->
    <div class="pagination w-[70vw] text-center">
      <?php
      echo paginate_links(array(
        'prev_text' => __('&laquo; Previous', 'tech'),
        'next_text' => __('Next &raquo;', 'tech'),
      ));
      ?>
    </div>
  </section>
  <?php get_footer(); ?>
</body>

</html>