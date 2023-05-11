<?php
  $group = blockFieldGroup(__FILE__); // REQUIRED
  $posts = new WP_Query(array( 
   'post_type'      => 'post',
   'orderby'        => 'date',
   'order'          => 'DESC',
   'posts_per_page' => 2
 )); ?>

 <?php if ( $posts->have_posts() ) : ?>
  <div <?php block_class_id( $block,'news-posts'); ?>>
    <div class="wrapper">
      <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
        <?php include( locate_template('partials/posts/post-entry.php') ); ?>
      <?php endwhile; ?>
    </div>
  </div>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
