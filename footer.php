
<?php // VARs & Optional ACF Footer Code
$logo = get_template_directory_uri() . '/assets/img/svg/logo-invert.svg';
$logo_copyright = get_template_directory_uri() . '/assets/img/svg/logo-county.svg';
if ( function_exists('get_field') ) :
 $footer_code = get_field('footer_code', 'option');
 $copyright = get_field('copyright', 'option');
endif; ?>

</main>

<footer class="footer">
  <div class="container">
    <div class="upper">
      <div class="footer-col col-1">
        <?php if ( $logo ) : ?>
          <div class="logo">
            <a href="#top-of-page" title="Go to top of the page">
              <img src="<?= $logo; ?>" alt="Ride Clackamas Logo">
            </a>
          </div>
        <?php endif; ?>
        <?php get_template_part('partials/navs/nav-footer', null, [ 
          'column' => 1,
        ]); ?>
      </div>

      <div class="footer-col col-2">
        <?php get_template_part('partials/navs/nav-footer', null, [ 
          'column' => 2,
        ]); ?>
      </div>

      <div class="footer-col col-3">
        <?php get_template_part('partials/navs/nav-footer', null, [ 
          'column' => 3,
        ]); ?>
      </div>

      <div class="footer-col col-4">
        <?php get_template_part('partials/navs/nav-footer', null, [ 
          'column' => 4,
        ]); ?>
      </div>
    </div>

    <div class="lower">
        <div class="copyright">
          <?php if ( $logo_copyright ) : ?>
            <div class="logo-alt">
              <a href="https://www.clackamas.us" title="Open Clackamas County site in new tab" target="_blank">
                <img src="<?= $logo_copyright; ?>" alt="Clackamas County Logo">
              </a>
            </div>
          <?php endif; ?>
          <?php if ( !empty($copyright) ) : ?>
            <?= $copyright; ?>
          <?php endif; ?>
        </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

<?php if ( isset($footer_code) ) echo $footer_code; ?>

</body>
</html>
