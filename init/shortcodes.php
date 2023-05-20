<?php

/* Button
========================================================= */
add_shortcode('button', 'ebutton');
function ebutton($atts, $content = null) {
 extract(shortcode_atts(array(
  'align'  => '',
  'url'    => '',
  'target' => ''
), $atts));

 $output = '<div class="button-wrap"';
 if ( $align ) {
  $output .=' style="text-align: '.$align.'"';
}
$output .= '><a';
if ( $target ) {
  $output .=' target="'.$target.'"';
}
$output .= ' href="'.$url.'" class="button">'.do_shortcode( $content ).'</a></div>';
return $output;
}

/* Current Year (for use within WYSIWYG editor, such as a Copyright Date)
========================================================= */
add_shortcode( 'year', 'jr_cy_y' );
function jr_cy_y() {
  $date = getdate();
  return $date['year'];
}

/* Other Ways To Go Menu
========================================================= */
add_shortcode( 'other_ways_menu', 'other_ways_menu_output' );
function other_ways_menu_output() {
  if ( has_nav_menu( 'other_ways_nav' ) ) :
    return wp_nav_menu( array(
      'theme_location'       => 'other_ways_nav',
      'container'            => '',
      'container_class'      => '',
      'container_aria_label' => '',
      'menu_id'              => '',
      'menu_class'           => 'other-ways-menu',
      'echo'                 => false,
      'fallback_cb'          => 'wp_page_menu',
      'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
      'depth'                => 1
    ));
  endif;
}
