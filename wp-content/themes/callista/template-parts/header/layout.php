<?php
/**
 * Template part for default Header layout.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Callista
 */
?>
<div class="header-container__flex">
	<div class="site-branding">
		<?php callista_header_logo() ?>
		<?php callista_site_description(); ?>
	</div>

	<div class="header_caption">
		<?php callista_main_menu(); ?>
		<?php callista_top_search( '<div class="header__search">%s</div>' ); ?>
	</div>
</div>
