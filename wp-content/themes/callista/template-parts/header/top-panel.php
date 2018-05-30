<?php
/**
 * Template part for top panel in header.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Callista
 */

// Don't show top panel if all elements are disabled.
if ( ! callista_is_top_panel_visible() ) {
	return;
} ?>

<div class="top-panel">
	<div <?php echo callista_get_container_classes( array( 'top-panel__wrap container' ), 'header' ); ?>>
		<div class="top-panel__info">
			<?php
					callista_top_menu();
					callista_top_message( '<div class="top-panel__message">%s</div>' );
				?>
		</div>
		<div class="top-panel__social">
			<?php callista_social_list( 'header' ); ?>
		</div>
	</div>
</div><!-- .top-panel -->
