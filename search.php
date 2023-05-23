<?php 
if ( !defined('ABSPATH') ) exit;
get_header();
?>


<section class="search-index">
  <div class="container">

    <div class="search-index--title">
      <h1>Search Results:</h1>
      <?php get_search_form(); ?>
    </div>

    <div class="search-index--content">
      <?php if ( have_posts() ) : ?>
        <div class="posts-grid grid">
          <?php while ( have_posts() ) : the_post(); ?>
            <div class="results-entry">
              <a href="<?php the_permalink(); ?>" title="Link to <?php the_title(); ?> page">
                <h2><?php the_title(); ?></h2>
                <hr>
                <?php the_excerpt(); ?>
              </a>
            </div>
          <?php endwhile; ?>

          <?php else : ?>
            <h3>No Results Found</h3>

          </div>
        <?php endif; ?>
      </div>

      <?php if ( $wp_query->max_num_pages > 1 ) : ?>
        <div class="search-index--pagination">
          <?php include( locate_template('partials/posts/post-pagination.php') ); ?>
        </div>
      <?php endif; ?>

    </div>
  </section>


  <?php get_footer(); ?>
