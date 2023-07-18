<?php get_header(); ?>

  <main>

    <?php if ( have_posts() ) : ?>
    
      <header class="archive__header">
        <div class="archive__header__container container">
          <h1>You searched for: <?php the_search_query(); ?></h1>
        </div>
      </header>

      <div class="archive__cardcontainer container">

    <?php while ( have_posts() ) : the_post(); ?>
      
        <?php get_template_part('inc/article', 'card'); ?>

    <?php endwhile; ?>

        <?php numeric_posts_nav(); ?>

      </div>

    <?php else: ?>

      <header class="archive__header">
        <div class="archive__header__container container">
          <h1>You searched for: <?php the_search_query(); ?></h1>
        </div>
      </header>

      <div class="archive__cardcontainer container error404__contentcontainer">
        <p>Sorry. We did noy find what you were looking for. Try another search?</p>
        <?php get_search_form(); ?>
        <p>or go back <a href="<?php bloginfo( 'url' ); ?>">Home</a></p>
      </div>


    <?php endif; ?>

  </main>

<?php get_footer(); ?>
