<div id="sidr">
  <div class="sidr__wrapper">
    
    <nav class="sidr__nav" aria-label="mobile navigation">
      <?php wp_nav_menu(array(
        'menu' => 'mainmenu',
        'theme_location' => 'mainmenu',
        'menu_class' => 'sidr__menu',
        'fallback_cb' => false
      )); ?>
    </nav>

    <div class="sidr__search">
      <?php get_search_form(); ?>
    </div>

  </div>
</div>