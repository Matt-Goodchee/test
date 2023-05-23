
<?php // VARs & Optional ACF Footer Code
$logo = get_template_directory_uri() . '/assets/img/svg/logo-invert.svg';
$logo_copyright = get_template_directory_uri() . '/assets/img/svg/logo-county.svg';
if ( function_exists('get_field') ) :
 $footer_code = get_field('footer_code', 'option');
 $copyright = get_field('copyright', 'option');
endif; ?>

</main>

<footer class="footer alt">
  <div class="show-more">
    <a href="#" title="Tap to show full menu">
      Show Menu<span class="fas fa-angle-double-down"></span>
    </a>
  </div>
  <div class="container">
    <div class="wrapper">
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
        <div class="copyright">
          <?php if ( $logo_copyright ) : ?>
            <div class="logo-alt">
              <a href="#" title="">
                <img src="<?= $logo_copyright; ?>" alt="Clackamas County Logo">
              </a>
            </div>
          <?php endif; ?>
          <?php if ( !empty($copyright) ) : ?>
            <?= $copyright; ?>
          <?php endif; ?>
        </div>
      </div>

      <div class="footer-col col-2">
        <?php get_template_part('partials/navs/nav-footer', null, [ 
          'column' => 2,
        ]); ?>
      </div>

      <div class="footer-col col-3">
        <p>Bus Systems</p>
        <?php get_template_part('partials/navs/nav-footer', null, [ 
          'column' => 3,
        ]); ?>
      </div>

      <div class="footer-col col-4">
        <p>Other Ways to Go</p>
        <?php get_template_part('partials/navs/nav-footer', null, [ 
          'column' => 4,
        ]); ?>
      </div>
    </div>

  </div>
</footer>

<?php wp_footer(); ?>

<?php if ( isset($footer_code) ) echo $footer_code; ?>

</body>
</html>
