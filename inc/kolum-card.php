<article class="columncard">

  <div class="columncard__thumb">
    <a href="#">
      <?php echo get_avatar( get_the_author_meta( 'ID' ), 50 ); ?>
    </a>
  </div>

  <div class="columncard__text">
    <div class="columncard__info">
      <?php get_template_part('inc/component', 'category'); ?>
      <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>"><?php the_author(); ?></a>
    </div>
    <header class="columncard__titlecontainer">
      <h1 class="columncard__title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
    </header>
  </div>

</article>