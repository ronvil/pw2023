<?php get_header(); ?>

  <main>

    <header class="archive__header">
      <div class="archive__header__container container">
        <h1>Error 404</h1>
      </div>
    </header>

    <div class="archive__cardcontainer container error404__contentcontainer">
      <p>Sorry. We did not find what you were looking for. Try another search?</p>
      <?php get_search_form(); ?>
      <p>or go back <a href="<?php bloginfo( 'url' ); ?>">Home</a></p>
    </div>


  </main>

<?php get_footer(); ?>