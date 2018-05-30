<?php
/**
 * The template for displaying the default footer layout.
 *
 * @package Callista
 */
?>

<div class="footer-container">
	<div <?php echo callista_get_container_classes( array( 'site-info' ), 'footer' ); ?>>
		<div class="site-info-wrapper container">

			<?php
				callista_footer_logo();
				callista_footer_copyright();
			?>

			<div class="site-info__bottom">
				<?php

					callista_footer_menu();
					callista_social_list( 'footer' );
				?>
			</div>

		</div><!-- .site-info -->
	</div>
</div><!-- .container -->
