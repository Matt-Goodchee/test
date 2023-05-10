<?php if ( has_nav_menu( 'footer_nav_1' ) ) : ?>
  <?php wp_nav_menu( array(
    'theme_location'       => 'footer_nav_1',
    'container'            => '',
    'container_class'      => '',
    'container_aria_label' => '',
    'menu_id'              => '',
    'menu_class'           => 'footer-nav-1',
    'echo'                 => true,
    'fallback_cb'          => 'wp_page_menu',
    'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'depth'                => 2
  )); ?>
<?php endif; ?>
