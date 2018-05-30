<?php
/**
 * Menus configuration.
 *
 * @package Callista
 */

add_action( 'after_setup_theme', 'callista_register_menus', 5 );
function callista_register_menus() {

	// This theme uses wp_nav_menu() in four locations.
	register_nav_menus( array(
		'top'    => esc_html__( 'Top', 'callista' ),
		'main'   => esc_html__( 'Main', 'callista' ),
		'footer' => esc_html__( 'Footer', 'callista' ),
		'social' => esc_html__( 'Social', 'callista' ),
	) );
}
