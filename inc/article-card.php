<article class="card">
          
  <div class="card__thumb">
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      <?php the_post_thumbnail( 'article-card' ); ?>
    </a>
  </div>

  <div class="card__text">

    <div class="card__categories">
      <?php get_template_part( 'inc/component', 'category' ); ?>
    </div>

    <h1 class="card__title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
    <div class="card__meta">
      <time><?php the_time('F j, Y'); ?></time>
    </div>
    <p class="card__excerpt"><?php echo get_the_excerpt(); ?></p>
  </div>

</article>