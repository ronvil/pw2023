<article class="card">
          
  <div class="card__thumb">
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      <?php the_post_thumbnail( 'article-card' ); ?>
    </a>
  </div>

  <div class="card__text">

    <h1 class="card__title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>

  </div>

</article>