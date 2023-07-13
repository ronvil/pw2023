<div class="relatedposts">
  <div class="relatedposts__container container">
    <?php $tags = wp_get_post_tags($post->ID);

      if ($tags) {
        echo '<header class="section__head">
          <h1>Related Posts</h1>
        </header>';
        $first_tag = $tags[0]->term_id;
        $args=array(
          'tag__in' => array($first_tag),
          'post__not_in' => array($post->ID),
          'category__not_in' => array(get_cat_ID('issues')),
          'showposts'=>4,
          'caller_get_posts'=>1
        );

        $my_query = new WP_Query($args);
        if( $my_query->have_posts() ) { while ($my_query->have_posts()) : $my_query->the_post(); ?>

          <?php get_template_part('inc/article', 'card'); ?>

        <?php endwhile; }
      } ?>
  </div>
</div>