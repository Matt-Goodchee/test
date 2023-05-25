<?php
$path      = get_template_directory_uri();
$logo      = $path . '/assets/img/svg/logo.svg';
$logo_icon = $path . '/assets/img/svg/logo-icon.svg';
// $icon_map  = $path . '/assets/img/svg/icon-map-marker.svg';
// $icon_menu = $path . '/assets/img/svg/icon-menu.svg';
// $icon_menu_close = $path . '/assets/img/svg/icon-menu-close.svg';
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
        <button href="#" class="map-toggle" title="Tap to Open Map" aria-label="Open Map**">
          <span>Map*</span>
          <svg width="18" height="24" viewBox="0 0 18 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.0625 23.5312C7.21875 22.3594 6.1875 20.8594 4.92188 19.0312C3.32812 16.7812 2.29688 15.2812 1.82812 14.4844C1.07812 13.3594 0.609375 12.4219 0.375 11.6719C0.09375 10.9219 0 10.0312 0 9C0 7.40625 0.375 5.90625 1.21875 4.5C2.01562 3.14062 3.09375 2.0625 4.5 1.21875C5.85938 0.421875 7.35938 0 9 0C10.5938 0 12.0938 0.421875 13.5 1.21875C14.8594 2.0625 15.9375 3.14062 16.7812 4.5C17.5781 5.90625 18 7.40625 18 9C18 10.0312 17.8594 10.9219 17.625 11.6719C17.3438 12.4219 16.875 13.3594 16.1719 14.4844C15.6562 15.2812 14.625 16.7812 13.0781 19.0312L9.9375 23.5312C9.70312 23.8594 9.375 24 9 24C8.57812 24 8.25 23.8594 8.0625 23.5312ZM9 12.75C10.0312 12.75 10.875 12.4219 11.625 11.6719C12.375 10.9219 12.75 10.0312 12.75 9C12.75 7.96875 12.375 7.125 11.625 6.375C10.875 5.625 10.0312 5.25 9 5.25C7.96875 5.25 7.07812 5.625 6.32812 6.375C5.57812 7.125 5.25 7.96875 5.25 9C5.25 10.0312 5.57812 10.9219 6.32812 11.6719C7.07812 12.4219 7.96875 12.75 9 12.75Z" fill="#F0421C"/></svg>
        </button>
        <button id="navbar-toggle" class="navbar-toggle" title="Tap to Open Menu" aria-label="Open Menu">
          <span>Menu</span>
          <svg class="open" width="23" height="13" viewBox="0 0 23 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 1.44444C0 0.677083 0.71875 0 1.64286 0H21.3571C22.2299 0 23 0.677083 23 1.44444C23 2.25694 22.2299 2.88889 21.3571 2.88889H1.64286C0.71875 2.88889 0 2.25694 0 1.44444ZM21.3571 13H1.64286C0.71875 13 0 12.3681 0 11.5556C0 10.7882 0.71875 10.1111 1.64286 10.1111H21.3571C22.2299 10.1111 23 10.7882 23 11.5556C23 12.3681 22.2299 13 21.3571 13Z" fill="#F0421C"/></svg>
          <svg class="close" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.5 20.9883C19.0781 20.9883 18.7031 20.8477 18.4219 20.5664L9.42188 11.5664C8.8125 11.0039 8.8125 10.0195 9.42188 9.45703L18.4219 0.457031C18.9844 -0.152344 19.9688 -0.152344 20.5312 0.457031C21.1406 1.01953 21.1406 2.00391 20.5312 2.56641L12.6094 10.4883L20.5312 18.457C21.1406 19.0195 21.1406 20.0039 20.5312 20.5664C20.25 20.8477 19.875 20.9883 19.5 20.9883Z" fill="#F0421C"/><path d="M1.48828 20.9883C1.91016 20.9883 2.28516 20.8477 2.56641 20.5664L11.5664 11.5664C12.1758 11.0039 12.1758 10.0195 11.5664 9.45703L2.56641 0.457031C2.00391 -0.152344 1.01953 -0.152344 0.457031 0.457031C-0.152344 1.01953 -0.152344 2.00391 0.457031 2.56641L8.37891 10.4883L0.457031 18.457C-0.152344 19.0195 -0.152344 20.0039 0.457031 20.5664C0.738281 20.8477 1.11328 20.9883 1.48828 20.9883Z" fill="#F0421C"/></svg>
        </button>
      </div>
    </div>
  </div>

  <div id="mobile-nav" class="mobile-nav">
    <div class="inner">
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

</div>
