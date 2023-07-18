<?php

/*
 * Template Name: Alternate Template
 * Template Post Type: post, page
 */

?>


<?php get_header(); ?>

  <main>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
      <article class="singleart">

        <header class="singleart__header">
          <div class="singleart__container singleart__header__container container">
            
          <div class="singleart__headertext">
              <?php get_template_part('inc/component', 'category'); ?>
              <h1 class="singleart__title"><?php the_title(); ?></h1>
              <div class="singleart__meta">
                <?php if ( function_exists( 'coauthors_posts_links' ) ) {
                  coauthors_posts_links( '', ', ', ' ', null );
                } else { ?>
                  <?php the_author_posts_link();
                } ?><br ><time><?php the_time('F j, Y'); ?></time>
              </div>

              <div class="singleart__excerpt">
                <?php the_excerpt(); ?>
              </div>

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
