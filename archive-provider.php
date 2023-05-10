<?php 
if ( !defined('ABSPATH') ) exit;
get_header();
?>

<?php if ( have_posts() ) : ?>

<?php // Intro Content
$content = apply_filters( 'the_content', get_the_content(null, false, 9) );
if ( !empty($content) ) :
  echo $content;
endif; ?>

<div class="providers-index">
  <div class="container">
    <div class="providers-index--content grid">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php //include( locate_template('partials/posts/provider-entry.php') ); ?>
        <?php
        $group = get_field('provider_group');
        $accent_color = $group['accent_color']; ?>
        <div class="provider <?= $accent_color; ?>">
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
      <?php endwhile; ?>
    </div>
  </div>
</div>
<?php endif; ?>


<?php get_footer(); ?>
