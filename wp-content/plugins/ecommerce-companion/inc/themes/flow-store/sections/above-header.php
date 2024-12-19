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
					<div class="col-lg-4 col-12 mb-lg-0">
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
				
					<div class="col-lg-8 col-12 mb-lg-0">
						<div class="widget-right justify-content-lg-end justify-content-center text-lg-right text-center">
							<?php dynamic_sidebar('flossy-header-above-second');	?>
							<?php do_action('flossy_abv_hdr_group_2');	?>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>		
<?php }  endif; 
	
add_action( 'flossy_above_header', 'flossy_above_header' );