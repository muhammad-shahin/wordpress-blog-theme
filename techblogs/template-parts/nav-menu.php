<header class="px-[15%] pt-8 relative z-[100]">
  <nav class="flex justify-between items-center <?php echo esc_attr(get_theme_mod('tech_logo_position')) ?>">
    <!-- site logo -->
    <div>
      <a href="<?php echo esc_attr(site_url()); ?>"><img src="<?php echo get_theme_mod('tech_logo'); ?>" alt="Site Logo"
          class="max-w-[180px]"></a>
    </div>
    <?php wp_nav_menu(array(
      'theme_location' => 'main_menu',
      'menu_class' => 'flex justify-center items-center gap-3 font-medium text-lg',
      'menu_id' => 'main-menu',
    )) ?>
  </nav>
</header>