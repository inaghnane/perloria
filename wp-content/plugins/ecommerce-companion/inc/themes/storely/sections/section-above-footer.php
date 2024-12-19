<?php
	if ( ! function_exists( 'storely_above_footer' ) ) :
	function storely_above_footer() {
	?>
	<?php 
	$hs_above_footer		= get_theme_mod( 'hs_above_footer','1');
	$above_footer_left_text	= get_theme_mod( 'above_footer_left_text',__('We’re Always Here To Help','ecommerce-companion'));
	$footer_above_content	= get_theme_mod( 'footer_above_content',storely_get_footer_above_default());
	if($hs_above_footer=='1'): ?>
		<div class="footer-top">
			<div class="container">
				<div class="row wow fadeInUp">
					<?php if(!empty($above_footer_left_text)): ?>
						<div class="col-lg-4 left-content">
							<aside class="widget-contact">
								<div class="contact-area">
									<div class="contact-info">
										<h6 class="title"><?php echo wp_kses_post($above_footer_left_text); ?></h6>
									</div>
								</div>
							</aside>
						</div>
					<?php endif; ?>
					<?php if(empty($above_footer_left_text)): ?>
					<div class="col-lg-12 text-lg-right mt-lg-0 mt-4 right-content">
					<?php else: ?>
					<div class="col-lg-8 text-lg-right mt-lg-0 mt-4 right-content">
					<?php endif; ?>
						<aside class="widget-contact">
							<?php
								if ( ! empty( $footer_above_content ) ) {
								$footer_above_content = json_decode( $footer_above_content );
								foreach ( $footer_above_content as $footer_item ) {
									$title = ! empty( $footer_item->title ) ? apply_filters( 'storely_translate_single_string', $footer_item->title, 'footer section' ) : '';
									$icon = ! empty( $footer_item->icon_value ) ? apply_filters( 'storely_translate_single_string', $footer_item->icon_value, 'footer section' ) : '';
									$link = ! empty( $footer_item->link ) ? apply_filters( 'storely_translate_single_string', $footer_item->link, 'footer section' ) : '';
							?>
								<div class="contact-area">
									<?php if(!empty($icon)): ?>
										<div class="contact-icon">
											<i class="fa <?php echo esc_attr($icon); ?>"></i>
										</div>
									<?php endif; ?>
									<?php if(!empty($title)): ?>
										<div class="contact-info">
											<h6 class="title"><a href="<?php echo esc_url($link); ?>"><?php echo esc_html($title); ?></a></h6>
										</div>
									<?php endif; ?>
								</div>
							<?php }}?>
						</aside>
					</div>
				</div>
			</div>
		</div>
	<?php endif;
} endif;
add_action('storely_above_footer', 'storely_above_footer');



/*
 *
 * Footer Widget Left
 */
if ( ! function_exists( 'storely_footer_widget_left' ) ) :
	function storely_footer_widget_left() {
	?>
	<?php 
	$footer_widget_left_hs		= get_theme_mod( 'footer_widget_left_hs','1');
	$footer_widget_left_ttl		= get_theme_mod( 'footer_widget_left_ttl',__('Contact Us','ecommerce-companion'));
	$footer_widget_left_content	= get_theme_mod( 'footer_widget_left_content',storely_get_footer_widet_left_content_default());
	$footer_widget_left_logo	= get_theme_mod( 'footer_widget_left_logo',esc_url(ECOMMERCE_COMP_PLUGIN_URL .'/inc/themes/storely/assets/images/logo_2.png'));
	if($footer_widget_left_hs=='1'): ?>
	<div class="col-lg-4 col-12 pr-lg-0 wow fadeInUp left-content">
		<?php if(!empty($footer_widget_left_logo)): ?>
			<div class="widget textwidget">
				<div class="logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url($footer_widget_left_logo); ?>" alt="<?php echo esc_attr_e('image','ecommerce-companion'); ?>"></a>
				</div>
			</div>
		<?php endif; ?>
		
		<aside class="widget widget-contact heads">
			<?php if(!empty($footer_widget_left_ttl)): ?>
				<h4 class="widget-title"><?php echo wp_kses_post($footer_widget_left_ttl); ?></h4>
			<?php endif; ?>
			
			<?php
				if ( ! empty( $footer_widget_left_content ) ) {
				$footer_widget_left_content = json_decode( $footer_widget_left_content );
				foreach ( $footer_widget_left_content as $footer_item ) {
					$title = ! empty( $footer_item->title ) ? apply_filters( 'storely_translate_single_string', $footer_item->title, 'footer Widget section' ) : '';
					$icon = ! empty( $footer_item->icon_value ) ? apply_filters( 'storely_translate_single_string', $footer_item->icon_value, 'footer Widget section' ) : '';
					$link = ! empty( $footer_item->link ) ? apply_filters( 'storely_translate_single_string', $footer_item->link, 'footer Widget section' ) : '';
			?>
				<div class="contact-area">
					<?php if(!empty($icon)): ?>
						<div class="contact-icon">
							<i class="fa <?php echo esc_attr($icon); ?>"></i>
						</div>
					<?php endif; ?>
					<?php if(!empty($title)): ?>
						<div class="contact-info">
							<p class="text"><a href="<?php echo esc_url($link); ?>"><?php echo esc_html($title); ?></a></p>
						</div>
					<?php endif; ?>
				</div>
			<?php }}?>
		</aside>
	</div>
<?php endif;
} endif;
add_action('storely_footer_widget_left', 'storely_footer_widget_left');