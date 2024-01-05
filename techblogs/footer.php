<footer class="py-10">

  <!-- tags -->
  <div class="w-fit mx-auto mb-20">
    <?php
    $tech_footer_tag_heading = apply_filters('tech_footer_tag_heading', __('Tags', 'tech'));
    $tech_footer_tag_items = apply_filters('tech_footer_tag_terms', get_tags());
    ?>
    <?php if ($tech_footer_tag_items): ?>
      <h3 class="text-3xl font-semibold text-purple-600">
        <?php echo esc_html($tech_footer_tag_heading); ?>
      </h3>
      <div class="flex justify-center items-center gap-3 uppercase mt-3">
        <?php
        // echo '<pre>';
        // print_r($tech_footer_tag_items);
        // echo '</pre>';
        if (is_array($tech_footer_tag_items)) {
          foreach ($tech_footer_tag_items as $tech_footer_tag_item) {
            printf('<a href="%s" class="bg-blue-600 px-3 py-1 rounded text-white">%s</a>', get_term_link($tech_footer_tag_item->term_id), $tech_footer_tag_item->name);
          }
        }
        ?>
      <?php endif; ?>
    </div>
  </div>

  <div id="footer" role="contentinfo" class="w-fit mx-auto">
    <a class="link" href="https://muhammad-shahin.web.app" target="_blank">Tech Blog Theme | © Muhammad
      Shahin</a>
  </div>
</footer>
<?php wp_footer(); ?>