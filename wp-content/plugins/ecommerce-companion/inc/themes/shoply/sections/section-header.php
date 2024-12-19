<?php
	if ( ! function_exists( 'storely_section_header' ) ) :
	function storely_section_header() { 
	$hdr_right_hs 				= get_theme_mod('hdr_right_hs','1');
	$social_icons 				= get_theme_mod('social_icons',storely_get_social_icon_default());
	if($hdr_right_hs == '1'  || is_active_sidebar( 'storely-header-above-first' )) { ?>	
		<div id="above-header" class="above-header d-lg-block d-none wow fadeIn">
			<div class="header-widget d-flex align-items-center">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-12 mb-lg-0 mb-4">
							<div class="widget-left text-lg-left text-center">
								<?php if($hdr_right_hs == '1') { ?>	
									<aside class="widget widget_social_widget">
										<ul>
											<?php
												$social_icons = json_decode($social_icons);
												if( $social_icons!='' )
												{
												foreach($social_icons as $social_item){	
												$social_icon = ! empty( $social_item->icon_value ) ? apply_filters( 'storely_translate_single_string', $social_item->icon_value, 'Header section' ) : '';	
												$social_link = ! empty( $social_item->link ) ? apply_filters( 'storely_translate_single_string', $social_item->link, 'Header section' ) : '';
											?>
												<li><a href="<?php echo esc_url( $social_link ); ?>"><i class="fa <?php echo esc_attr( $social_icon ); ?>"></i></a></li>
											<?php }} ?>
										</ul>
									</aside>
								<?php } ?>	
							</div>	
						</div>
						<div class="col-lg-6 col-12 mb-lg-0 mb-4">
							<div class="widget-right justify-content-lg-end justify-content-center text-lg-right text-center">
								<?php 
								$storely_above_widget_first = 'storely-header-above-first';
									if ( is_active_sidebar($storely_above_widget_first) ){ 
										dynamic_sidebar( 'storely-header-above-first' );
								}elseif ( current_user_can( 'edit_theme_options' ) ) {
									$storely_sidebar_name = storely_lite_get_sidebar_name_by_id( $storely_above_widget_first );
									?>
									<div class="widget widget_none">
										<h4 class='widget-title'><?php echo esc_html( $storely_sidebar_name ); ?></h4>
										<p>
											<?php if ( is_customize_preview() ) { ?>
												<a href="JavaScript:Void(0);" class="" data-sidebar-id="<?php echo esc_attr( $storely_above_widget_first ); ?>">
											<?php } else { ?>
												<a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>">
											<?php } ?>
												<?php esc_html_e( 'Please assign a widget here.', 'ecommerce-companion' ); ?>
											</a>
										</p>
									</div>
									<?php
								} 
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php } 
} endif;
add_action('storely_section_header', 'storely_section_header');
