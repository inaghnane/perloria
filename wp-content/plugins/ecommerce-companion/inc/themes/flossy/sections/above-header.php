<?php 
	if ( ! function_exists( 'flossy_above_header' ) ) :
	function flossy_above_header(){ 
		
	$hide_show_typerite_text 	=	get_theme_mod('hide_show_typerite_text','1');
	$hdr_typerite_text 		=	get_theme_mod('hdr_typerite_text',__('["Free shipping all order of $150","Allow users to easily register","filter products by price","Product previews available"]','ecommerce-companion'));	
	$typing_text_explode	=	explode(', ', $hdr_typerite_text);
	?>
	
	<div id="above-header" class="above-header d-lg-block d-none wow fadeIn">
			<div class="header-widget d-flex align-items-center">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 col-12 mb-lg-0">
							<div class="widget-left text-lg-left text-center">
							<aside  class="widget widget_nav_menu">
								<?php 
									wp_nav_menu( 
										array(  
											'theme_location' => 'header_above_menu_left',
											'container'  => '',
											'menu_class' => 'menu',
											'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
											'walker' => new WP_Bootstrap_Navwalker()
											 ) 
										);
									?>
								</aside>
								<?php if($hide_show_typerite_text == '1'): ?>
								<aside class="widget textwidget">
									<span class="icon"><i class="fa fa-tag"></i></span>
										<p class="typewrite" data-period="2000" data-type='<?php foreach($typing_text_explode as $text){ echo wp_kses_post($text); } ?>'>
											<span class="wrap"></span>
										</p>
								</aside>
								<?php endif; ?>
							</div>
						</div>
						<div class="col-lg-6 col-12 mb-lg-0">
							<div class="widget-right justify-content-lg-end justify-content-center text-lg-right text-center">
								<?php do_action('flossy_abv_hdr_group_2');	?>
								<aside id="nav_menu" class="widget widget_nav_menu">
									<div class="menu-top-menu-container">
										<?php 
											wp_nav_menu( 
												array(  
													'theme_location' => 'header_above_menu_right',
													'container'  => '',
													'menu_class' => 'menu',
													'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
													'walker' => new WP_Bootstrap_Navwalker()
													 ) 
												);
											?>
									</div>
								</aside>
							</div>	
						</div>				
					</div>
				</div>
			</div>
		</div>		
	<?php }  endif; 
	
add_action( 'flossy_above_header', 'flossy_above_header' );