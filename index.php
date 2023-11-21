<?php get_header(); ?>

  <main>

    <section class="hero">
      <div class="container hero__container">

        <?php $the_query = new WP_Query( array(
          'posts_per_page' => 1,
          'post__in'  => get_option( 'sticky_posts' ),
          'ignore_sticky_posts' => 1
        ) ); ?>
        <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); $exclude[] = $post->ID;?>
        
          <?php get_template_part( 'inc/article', 'card' ); ?>
        
        <?php endwhile; endif; ?>
          
      </div>
    </section>
    
    <section class="updates">
      <div class="container updates__container">
        <?php $the_query = new WP_Query( array(
          'posts_per_page' => 4,
          'post__not_in' =>  $exclude,
          'category_name' => 'balita, lathalain'
        ) ); ?>
        <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); $exclude[] = $post->ID?>
        
          <?php get_template_part( 'inc/article', 'card' ); ?>
        
        <?php endwhile; wp_reset_postdata(); endif; ?>
      </div>
    </section>

    <section class="issues">
      <div class="container issues__container">

        <header class="section__head">
          <h1>I-download ang edisyong print ng PinoyWeekly</h1>
        </header>

        <div class="swiper">
          
          <div class="swiper-wrapper">

            <?php $the_query = new WP_Query( array(
              'posts_per_page' => 10,
              'post__not_in' =>  $exclude,
              'category_name' => 'issues'
            ) ); ?>
            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); $exclude[] = $post->ID?>
            
              <?php get_template_part( 'inc/issue', 'card' ); ?>
            
            <?php endwhile; wp_reset_postdata(); endif; ?>
            
          </div>
        
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        
        </div>

      </div>
    </section>

    <div class="oped-cult-container container">
      
      <section class="oped">
        
        <div class="editorial">
          <header class="section__head">
            <h1>Editoryal</h1>
          </header>
          
          <?php $the_query = new WP_Query( array(
            'posts_per_page' => 1,
            'post__not_in' =>  $exclude,
            'category_name' => 'editoryal'
          ) ); ?>
          <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); $exclude[] = $post->ID?>
          
            <?php get_template_part( 'inc/article', 'card' ); ?>
          
          <?php endwhile; wp_reset_postdata(); endif; ?>


        </div>

        <div class="columncard__container">

          <header class="section__head">
            <h1>Opinyon</h1>
          </header>
          
          <?php $the_query = new WP_Query( array(
            'posts_per_page' => 8,
            'post__not_in' =>  $exclude,
            'category_name' => 'kolum'
          ) ); ?>
          <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); $exclude[] = $post->ID?>
          
            <?php get_template_part( 'inc/kolum', 'card' ); ?>
          
          <?php endwhile; wp_reset_postdata(); endif; ?>


        </div>

      </section>

      <section class="cult">

        <header class="section__head">
          <h1>Kultura</h1>
        </header>

        <div class="cult__container">
        
          <?php $the_query = new WP_Query( array(
              'posts_per_page' => 4,
              'post__not_in' =>  $exclude,
              'category_name' => 'kultura'
            ) ); ?>
            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); $exclude[] = $post->ID?>
            
              <?php get_template_part( 'inc/article', 'card' ); ?>
            
            <?php endwhile; wp_reset_postdata(); endif; ?>
          
          </div>

        <div class="talasalitaan">
          <header class="section__head">
            <h1>Talasalitaan</h1>
          </header>
          
          <?php $the_query = new WP_Query( array(
            'posts_per_page' => 1,
            'post__not_in' =>  $exclude,
            'category_name' => 'talasalitaan'
          ) ); ?>
          <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); $exclude[] = $post->ID?>
          
            <?php get_template_part( 'inc/article', 'card' ); ?>
          
          <?php endwhile; wp_reset_postdata(); endif; ?>
        
        </div>
          
        </div>

      </section>
    </div>

  </main>

<?php get_footer(); ?>
