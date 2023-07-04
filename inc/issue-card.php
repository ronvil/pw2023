<div class="swiper-slide">
  <a href="<?php the_field('issue_download_link'); ?>" title="<?php the_title(); ?>">
    <div class="swiper-slide__text">
      <h2><?php the_title(); ?></h2>
    </div>
    <?php the_post_thumbnail( 'full' ); ?>
  </a>
</div>