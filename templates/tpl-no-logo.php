<?php
/* Template Name: No Header Logo
========================================================= */ ?>

<?php 
  if ( !defined('ABSPATH') ) exit;
  get_header('alt');
?>


<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; ?>
<?php endif; ?>


<?php get_footer('alt'); ?>
