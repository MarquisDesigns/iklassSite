<?php get_header( callista_template_base() ); ?>

	<?php do_action( 'callista_render_widget_area', 'full-width-header-area' ); ?>

	<?php callista_site_breadcrumbs(); ?>

	<div <?php echo callista_get_container_classes( array( 'site-content_wrap' ), 'content' ); ?>>

		<?php do_action( 'callista_render_widget_area', 'before-content-area' ); ?>

		<div class="row">

			<div id="primary" <?php callista_primary_content_class(); ?>>

				<?php do_action( 'callista_render_widget_area', 'before-loop-area' ); ?>

				<main id="main" class="site-main" role="main">

					<?php include callista_template_path(); ?>

				</main><!-- #main -->

				<?php do_action( 'callista_render_widget_area', 'after-loop-area' ); ?>

			</div><!-- #primary -->

			<?php get_sidebar( 'secondary' ); // Loads the sidebar-secondary.php template. ?>

			<?php get_sidebar(); // Loads the sidebar-primary.php template.  ?>

		</div><!-- .row -->

		<?php do_action( 'callista_render_widget_area', 'after-content-area' ); ?>

	</div><!-- .container -->

	<?php do_action( 'callista_render_widget_area', 'after-content-full-width-area' ); ?>

<?php get_footer( callista_template_base() ); ?>
