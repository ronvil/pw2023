<?php get_header(); ?>

  <main>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
      <article class="singleart">

        <header class="singleart__header">
          <div class="singleart__container singleart__header__container container">
            
            <div class="singleart__headertext">
              <h1 class="singleart__title"><?php the_title(); ?></h1>
            </div>

            <div class="singleart__thumb">
              <?php the_post_thumbnail( 'full' ); ?>
            </div>

          </div>
        </header>

        <div class="singleart__content">
          <div class="singleart__container container">
            <?php the_content(); ?>
          </div>
        </div>

      </article>

    <?php endwhile; else : ?>
      <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

    

  </main>

<?php get_footer(); ?>
