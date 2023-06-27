<?php 

/* Highlight Provider in menu
========================================================= */
function highlight_specific_menu_item($classes, $item) {
  if (is_singular('provider') && $item->ID === 204) { // "Bus Systems"
    $classes[] = 'current-menu-item';
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'highlight_specific_menu_item', 10, 2);

/*  DISABLE GUTENBERG STYLE IN HEADER| WordPress 5.9 */
// function wps_deregister_styles() {
//     wp_dequeue_style( 'global-styles' );
// }
// add_action( 'wp_enqueue_scripts', 'wps_deregister_styles', 100 );
