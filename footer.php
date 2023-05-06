
<?php // VARs & Optional ACF Footer Code
$logo = get_template_directory_uri() . '/assets/img/svg/logo.svg';
$logo_copyright = get_template_directory_uri() . '/assets/img/svg/logo-county.svg';
if ( function_exists('get_field') ) :
 $footer_code = get_field('footer_code', 'option');
endif; ?>

</main>

<footer class="footer">
  <div class="container">
    <div class="footer-col col-1">
      <?php if ( $logo ) : ?>
        <div class="logo">
          <a href="#top-of-page" title="Go to top of the page">
            <img src="<?= $logo; ?>" alt="Ride Clackamas Logo">
          </a>
        </div>
      <?php endif; ?>
      <?php include locate_template('partials/navs/nav-footer-1.php'); ?>
      <?php if ( $logo_copyright ) : ?>
        <div class="logo-alt">
          <a href="#" title="">
            <img src="<?= $logo_copyright; ?>" alt="Clackamas County Logo">
          </a>
        </div>
      <?php endif; ?>
    </div>

    <div class="footer-col col-2">
      <?php include locate_template('partials/navs/nav-footer-2.php'); ?>
    </div>

    <div class="footer-col col-3">
      <p>Bus Systems</p>
      <?php include locate_template('partials/navs/nav-footer-3.php'); ?>
    </div>

    <div class="footer-col col-4">
      <p>Other Ways to Go</p>
      <?php include locate_template('partials/navs/nav-footer-4.php'); ?>
    </div>

  </div>
</footer>

<?php wp_footer(); ?>

<?php if ( isset($footer_code) ) echo $footer_code; ?>

</body>
</html>
