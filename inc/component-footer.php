<footer role="contentinfo" class="mainfooter">

  <div class="socials">
    <div class="container socials__container">

      <div class="footerlogo socials__logo">
        <a href="<?php bloginfo( 'url' ); ?>" aria-label="Pinoy Weekly homepage">
          <h1 class="screen-reader-text">Pinoy Weekly</h1>
          <img class="logo" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/pw-logo.svg"alt="Pinoy Weekly logo">  
        </a>
      </div>

      <nav class="socials__nav">
        <a href="https://www.facebook.com/pinoyweekly.org" class="socials__link" target="_blank" title="Pinoy Weekly Facebook page" rel="nofollow"><svg class="socials__icon"><use xlink:href="#facebook" /></svg></a>
        <a href="https://twitter.com/pinoyweekly" class="socials__link" target="_blank" title="Pinoy Weekly Twitter account" rel="nofollow"><svg class="socials__icon"><use xlink:href="#twitter" /></svg></a>
        <a href="https://www.instagram.com/pinoyweekly/" class="socials__link" target="_blank" title="Pinoy Weekly Instagram page" rel="nofollow"><svg class="socials__icon"><use xlink:href="#instagram" /></svg></a>
        <a href="https://invite.viber.com/?g2=AQAKflAhzNADVlCKmTY80QW7sEYoDMpYntRatY3hB8nhQEQLzjKBnWwPd%2FYbvIIU" class="socials__link" target="_blank" title="Pinoy Weekly Viber Channel" rel="nofollow"><svg class="socials__icon"><use xlink:href="#viber" /></svg></a>
        <a href="https://t.me/pinoyweekly" class="socials__link" target="_blank" title="Pinoy Weekly Telegram Channel" rel="nofollow"><svg class="socials__icon"><use xlink:href="#telegram" /></svg></a>
      </nav>

    </div>
  </div>

  <div class="footernav__wrapper">
    <div class="footernav__container container">

    <?php wp_nav_menu(array(
        'menu' => 'legalmenu',
        'theme_location' => 'legalmenu',
        'menu_class' => 'main-menu',
        'container' => 'nav',
        'container_class' => 'footernav',
        'fallback_cb' => false
      )); ?>
      

      <nav class="quirium">
        <a href="https://storage.googleapis.com/qurium/pinoyweekly.org/index.html" aria-label="link to Pinoy weekly Mirror">
          <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/bifrost.webp" alt="Bifrost logo">
        </a>
        <a href="https://t.me/+fXcDfEsgIG0yZjA9" aria-label="link to Pinoy weekly telegram">
          <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/bifrost-telegram.webp" alt="Bifrost Telegram logo">
        </a>
      </nav>

    </div>
  </div>

  <div class="legal">
    <div class="legal__container container">
      <p>Copyright 2023. Pinoy Weekly. Published by the Pinoy Media Center. Some rights reserved.</p>
    </div>
  </div>

</footer>