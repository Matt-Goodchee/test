<?php
  $group = blockFieldGroup(__FILE__); // REQUIRED
  $page_id = get_the_ID();
  ?>

<?php // Providers
$providers = new WP_Query(array( 
 'post_type'      => 'provider',
 'orderby'        => 'date',
 'order'          => 'DESC',
 'posts_per_page' => -1
)); ?>

<?php if ( $providers->have_posts() ) : ?>
<div <?php block_class_id( $block,'providers-mini' ); ?>>
  <div class="wrapper animated-group">

    <?php while ( $providers->have_posts() ) : $providers->the_post();
        $post_id    = get_the_ID();
        $group      = get_field('provider_group', $post_id);
        $is_current = is_singular('provider') && $page_id === $post_id ? ' current' : NULL;
        ?>
    <div class="provider <?= $group['accent_color'] . $is_current; ?> animated-entry">
      <a href="<?php the_permalink(); ?>" title="View detailed info about the <?php the_title(); ?> system">
        <figure class="image"><?php the_post_thumbnail(); ?></figure>
        <div class="name"><span><?= esc_html($group['short_name']); ?></span></div>
      </a>
    </div>
    <?php endwhile; ?>

  </div>
</div>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
