<?php
/**
 * Template part for displaying countdown timer
 */
?>
<div class="tm_pb_countdown_timer_container clearfix">
	<?php echo $this->html( $this->_var( 'title' ), '<h2>%s</h2>' ) ?>
	<div class="days section values" data-short="<?php esc_attr_e( 'Day', 'callista' ); ?>" data-full="<?php esc_html_e( 'Day(s)', 'callista' ); ?>">
		<span class="value"></span>
		<span class="label"><?php esc_html_e( 'Day(s)', 'callista' ); ?></span>
	</div>
	<div class="sep section"><span class="countdown-sep"></span></div>
	<div class="hours section values" data-short="<?php esc_attr_e( 'Hrs', 'callista' ); ?>" data-full="<?php esc_html_e( 'Hour(s)', 'callista' ); ?>">
		<span class="value"></span>
		<span class="label"><?php esc_html_e( 'Hour(s)', 'callista' ); ?></span>
	</div>
	<div class="sep section"><span class="countdown-sep"></span></div>
	<div class="minutes section values" data-short="<?php esc_attr_e( 'Min', 'callista' ); ?>" data-full="<?php esc_html_e( 'Minute(s)', 'callista' ); ?>">
		<span class="value"></span>
		<span class="label"><?php esc_html_e( 'Minute(s)', 'callista' ); ?></span>
	</div>
	<div class="sep section"><span class="countdown-sep"></span></div>
	<div class="seconds section values" data-short="<?php esc_attr_e( 'Sec', 'callista' ); ?>" data-full="<?php esc_html_e( 'Second(s)', 'callista' ); ?>">
		<span class="value"></span>
		<span class="label"><?php esc_html_e( 'Second(s)', 'callista' ); ?></span>
	</div>
</div>
