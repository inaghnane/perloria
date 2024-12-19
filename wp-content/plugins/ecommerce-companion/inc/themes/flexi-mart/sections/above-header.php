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
				<div class="row">
					<div class="col-lg-6 col-12 mb-lg-0">
						<?php if($hide_show_typerite_text == '1'): ?>
							<div class="widget-left text-lg-left text-center">
								<aside class="widget textwidget">
									<span class="icon"><i class="fa fa-tag"></i></span>
										<p href="#" class="typewrite" data-period="2000" data-type='<?php foreach($typing_text_explode as $text){ echo esc_html($text); } ?>'>
											<span class="wrap"></span>
										</p>
								</aside>
							</div>
						<?php endif; ?>
					</div>
					
					<div class="col-lg-6 col-12 mb-lg-0">
						<?php $myaccount_page = get_option( 'woocommerce_myaccount_page_id' ); ?>
						<div class="widget-right justify-content-lg-end justify-content-center text-lg-right text-center">
							<aside id="nav_menu-2" class="widget widget_nav_menu">
								<h5 class="widget-title"><?php echo esc_html__('menu','ecommerce-companion'); ?></h5>
								<div class="menu-above-header-menu-container">
									<ul id="menu-above-header-menu" class="menu">
										<li id="menu-item-44" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-44">
											<?php if ( $myaccount_page ) { ?>
												<a href="<?php echo esc_url(get_permalink( $myaccount_page )); ?>"><?php echo esc_html__('My account','ecommerce-companion'); ?></a>
											<?php } ?>
											<ul class="sub-menu">
												<li id="menu-item-42"
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-42">
													<a href="<?php echo esc_url(home_url('/')).'wp-login.php'; ?>"><?php echo esc_html__('Login','ecommerce-companion'); ?></a>
												</li>
												<li id="menu-item-43"
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-43">
													<a href="<?php echo esc_url(home_url('/')).'wp-login.php?action=register'; ?>"><?php echo esc_html__('Register','ecommerce-companion'); ?></a>
												</li>
											</ul>
										</li>
									</ul>
								</div>
							</aside>
							<?php dynamic_sidebar('flossy-header-above-second');	?>
							<?php do_action('flossy_abv_hdr_group_1');	?>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>	
<?php }  endif; 
	
add_action( 'flossy_above_header', 'flossy_above_header' );