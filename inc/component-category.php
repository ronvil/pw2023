<?php $categories = get_the_category();
  $separator = ' ';
  $output = '';
  if ( ! empty( $categories ) ) {
    foreach( $categories as $category ) {
      $children=get_categories(array( 'parent' => $category->cat_ID ));
          if ( count($children) == 0 ) {
            $output .= '<a href="' . esc_url( get_category_link( 
            $category->term_id ) ) . '" class="category-link">' . esc_html ($category->name) . 
          '</a>' . $separator;
        }
    }
      echo trim( $output, $separator );

  } ?>