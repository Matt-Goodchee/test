<?php
/* Custom Font Embeds
========================================================= */

function rc_enqueue_custom_fonts() {
	// wp_enqueue_style('typekit', "https://use.typekit.net/rfw6ied.css" );
	wp_enqueue_script('fontawesome', "https://kit.fontawesome.com/78f93195e3.js" );
	wp_enqueue_style('google', "https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,400;0,700;1,400&family=Montserrat:wght@400;500;600;700&display=swap", array(), null);
}
add_action('admin_enqueue_scripts', 'rc_enqueue_custom_fonts');
add_action('wp_enqueue_scripts', 'rc_enqueue_custom_fonts');
