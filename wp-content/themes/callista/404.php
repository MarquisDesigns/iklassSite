<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Callista
 */
?>

<section class="error-404 not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Error 404.', 'callista' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<h1><?php esc_html_e( 'The page not found.', 'callista' ); ?></h1>
		<p><a class="btn btn-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Visit home page', 'callista' ); ?></a></p>
		<div class="caption">
				<p><?php esc_html_e( 'Unfortunately the page you were looking for could not be found. Maybe search can help.', 'callista' ); ?></p>
				<?php get_search_form(); ?>
	</div>
	</div><!-- .page-content -->
</section><!-- .error-404 -->
