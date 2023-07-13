

<?php get_header(); ?>

  <main>

    <?php if ( have_posts() ) : ?>
    
      <header class="archive__header author__header">
        <div class="archive__header__container container author__header__container">
          <div class="author__thumb"><?php echo get_wp_user_avatar( get_the_author_meta( 'ID' ), 100 ); ?></div>
          <div class="author__info">
            <h1><?php the_archive_title(); ?></h1>
            <div class="author__bio"><?php echo get_the_author_meta('description'); ?></div>
          </div>
        </div>
      </header>

      <div class="archive__cardcontainer container">

    <?php while ( have_posts() ) : the_post(); ?>
      
        <?php get_template_part('inc/article', 'card'); ?>

    <?php endwhile; ?>

        <?php numeric_posts_nav(); ?>
      
      </div>

    <?php endif; ?>

  </main>

<?php get_footer(); ?>
