<?php
global $post;
$group        = get_field('provider_group', get_the_ID());
$accent_color = $group['accent_color'];
$slug         = $post->post_name; ?>

<div class="provider <?= $accent_color.' '.$slug; ?> animated-entry">
  <a href="<?php the_permalink(); ?>" title="View detailed info about the <?php the_title(); ?> system">
    <figure class="image"><?php the_post_thumbnail(); ?></figure>
    <div class="meta">
      <h2><?php the_title(); ?></h2>
      <?php the_excerpt(); ?>
      <div class="link">
        <p>Information & Bus Fares <span class="fas fa-arrow-right"></span></p>
      </div>
    </div>
  </a>
</div>
