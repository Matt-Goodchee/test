<?php
$path      = get_template_directory_uri();
$logo      = $path . '/assets/img/svg/logo.svg';
$logo_icon = $path . '/assets/img/svg/logo-icon.svg';
$icon_map  = $path . '/assets/img/svg/icon-map-marker.svg';
$icon_menu = $path . '/assets/img/svg/icon-menu.svg';
$show_logo = $args['show_logo'];
?>
<div class="mobile-nav-wrap">

  <div class="mobile-nav-header">
    <div class="container">
      <?php if ( $show_logo ) : ?>
        <a href="<?= home_url(); ?>" class="mobile-brand" title="Tap to Go Home" aria-label="Go Home">
          <img src="<?= $logo; ?>" alt="Site Logo">
        </a>
      <?php endif; ?>
      <div class="wrapper">
        <div class="translate">TRANSLATE</div>
        <button class="map-toggle" title="Tap to Open Map" aria-label="Open Map">
          <span>Map</span><img src="<?= $icon_map; ?>" alt="">
        </button>
        <button class="navbar-toggle" title="Tap to Open Menu" aria-label="Open Menu">
          <span>Menu</span><img src="<?= $icon_menu; ?>" alt="">
        </button>
      </div>
    </div>
  </div>

  <div class="mobile-nav">

    <?php if ( has_nav_menu( 'primary_nav' ) ) :

    // Use mobile nav if assigned, else use desktop nav instead
    $theme_location = has_nav_menu( 'mobile_nav' ) ? 'mobile_nav' : 'primary_nav';
    wp_nav_menu( array(
      'theme_location'       => $theme_location,
      'container'            => '',
      'container_class'      => '',
      'container_aria_label' => '',
      'menu_id'              => '',
      'menu_class'           => 'mobile-menu',
      'echo'                 => true,
      'fallback_cb'          => 'wp_page_menu',
      'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
      'depth'                => 1
    )); ?>
  <?php endif; ?>
  <?php get_search_form(); ?>
  <figure>
    <img src="<?= $logo_icon; ?>" alt="">
  </figure>
</div>

</div>
