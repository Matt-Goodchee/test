<article class="post-entry flex">

  <?php if ( has_post_thumbnail() ) : ?>
    <div class="post-entry__primary">
      <figure>
        <?php the_post_thumbnail('medium'); ?>
      </figure>
    </div>
  <?php endif; ?>

  <div class="post-entry__secondary">
    <div class="flex">
      <h3 class="preset4"><?php the_title(); ?></h3>
      <time datetime="<?= get_the_time('c'); ?>"><?= get_the_date(); ?></time>
    </div>
    <hr>
    <?php if ( get_the_content() ) : ?>
      <div class="content">
        <?php the_content(); ?>
      </div>
    <?php endif; ?>
  </div>

</article>
