<?php
/**
 * Thumbnails configuration.
 *
 * @package Callista
 */

add_action( 'after_setup_theme', 'callista_register_image_sizes', 5 );
function callista_register_image_sizes() {
	set_post_thumbnail_size( 370, 253, true );

	// Registers a new image sizes.
	add_image_size( 'callista-thumb-s', 150, 150, true );
	add_image_size( 'callista-thumb-m', 400, 400, true );
	add_image_size( 'callista-thumb-l', 1354, 645, true );
	add_image_size( 'callista-thumb-xl', 1920, 1080, true );
	add_image_size( 'callista-author-avatar', 512, 512, true );
	add_image_size( 'callista-thumb-183-133', 183, 133, true );

	add_image_size( 'callista-thumb-240-100', 240, 100, true );
	add_image_size( 'callista-thumb-560-350', 560, 350, true );
	add_image_size( 'callista-thumb-652-264', 652, 264, true );
	add_image_size( 'callista-thumb-1920-880', 1920, 880, true );

	//projects categories
	add_image_size( 'callista-thumb-418-304', 480, 350, true );
	add_image_size( 'callista-thumb-836-608-fullscreen', 836, 608, true );

}
