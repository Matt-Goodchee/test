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
        <?php include( locate_template('partials/posts/provider-entry.php') ); ?>
      <?php endwhile; ?>
    </div>
  </div>
</div>
<?php endif; ?>


<?php get_footer(); ?>
