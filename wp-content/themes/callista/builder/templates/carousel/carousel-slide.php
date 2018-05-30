<?php
/**
 * Template part for displaying carousel item slides
 */
?>
<!-- Slide-->
<div class="swiper-slide">
	<?php echo $this->_var( 'image' ); ?>
	<header class="entry-content">
		<?php echo $this->_var( 'post_title' ); ?>
		<?php echo $this->_var( 'category' ); ?>
		<?php echo $this->_var( 'excerpt' ); ?>
	</header>
	<article class="entry-content">
		<div class="meta_wrap">
		<div><?php echo $this->_var( 'author' ); ?></div>
		<div><?php echo $this->_var( 'date' ); ?></div>
		<div class="count_wrap"><?php echo $this->_var( 'count' ); ?></div>
		<?php echo $this->_var( 'tag' ); ?>
	</div>
	</article>
	<footer class="entry-footer">
		<?php echo $this->_var( 'more_button' ); ?>
	</footer>
</div>
