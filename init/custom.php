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
