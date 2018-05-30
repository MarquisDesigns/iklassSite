<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Callista
 */
?>
<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'callista' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf(
			 '%1$s <a href="%3$s">%2$s</a>.',
			 esc_html__('Ready to publish your first post?', 'callista'),
			 esc_html__('Get started here', 'callista'),
			 esc_url( admin_url( 'post-new.php' ) )
		 ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'callista' ); ?></p>

			<?php get_search_form();

		else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'callista' ); ?></p>

			<?php get_search_form();

		endif; ?>

	</div><!-- .page-content -->
</section><!-- .no-results -->
