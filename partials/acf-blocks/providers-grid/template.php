<?php
  $group = blockFieldGroup(__FILE__); // REQUIRED
  ?>

  <?php
  $providers = new WP_Query(array( 
   'post_type'      => 'provider',
   'orderby'        => 'date',
   'order'          => 'DESC',
   'posts_per_page' => -1
 )); ?>

 <?php if ( $providers->have_posts() ) : ?>
  <div class="providers-index">
    <div class="wrapper">
      <div class="providers-index--content grid">
        <?php while ( $providers->have_posts() ) : $providers->the_post(); ?>
          <?php include( locate_template('partials/posts/provider-entry.php') ); ?>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
