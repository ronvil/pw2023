<header class="banner" role="banner">

  <div class="container banner__container">

    <div class="logo__container">
      <a href="<?php bloginfo( 'url' ); ?>" class="logo__anchor" aria-label="Pinoy Weekly homepage">
        <h1 class="screen-reader-text">Pinoy Weekly</h1>
        <img class="logo" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/pw-logo.svg"alt="Pinoy Weekly logo">
      </a>
    </div>

    <nav class="main-nav" aria-label="main navigation">
      <?php wp_nav_menu(array(
        'menu' => 'mainmenu',
        'theme_location' => 'mainmenu',
        'menu_class' => 'main-menu',
        'fallback_cb' => false
      )); ?>
    </nav>

    <a id="search-toggle" href="#" class="search-toggle" aria-label="toggle search"><i class="fa-solid fa-magnifying-glass"></i></a>

    <a id="menu-toggle" href="#sidr" class="menu-toggle" aria-label="mobile navigation"><i class="fa-solid fa-bars"></i></a>

  </div>

</header>