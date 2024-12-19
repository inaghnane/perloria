<?php

/*
 *
 * Social Icon
 */
function aromatic_get_social_icon_default() {
	return apply_filters(
		'aromatic_get_social_icon_default', json_encode(
				 array(
				array(
					'icon_value'	  =>  esc_html__( 'fa-facebook', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_header_social_001',
				),
				array(
					'icon_value'	  =>  esc_html__( 'fa-google-plus', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_header_social_002',
				),
				array(
					'icon_value'	  =>  esc_html__( 'fa-twitter', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_header_social_003',
				),
				array(
					'icon_value'	  =>  esc_html__( 'fa-linkedin', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_header_social_004',
				)
			)
		)
	);
}


/*
 *
 * Slider Default
 */
 function aromatic_get_slider_default() {
	return apply_filters(
		'aromatic_get_slider_default', json_encode(
				 array(
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/ayroma/assets/images/page-slider/slide-bg.jpg',
					'image_url2'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/ayroma/assets/images/page-slider/slider-img.png',
					'title'           => esc_html__( 'Exclusive offers -30% Off', 'ecommerce-companion' ),
					'subtitle'         => esc_html__( 'Cosmetics That Everyone Love!', 'ecommerce-companion' ),
					'subtitle2'         => esc_html__( '$99.03', 'ecommerce-companion' ),
					'text'            => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Sit alias veritatis placeat tempora aut iure dolorem sunt nostrum porro
                                        dolor.', 'ecommerce-companion' ),
					'text2'	  =>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					"slide_align" => "left", 
					'id'              => 'customizer_repeater_slider_001',
				),
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/ayroma/assets/images/page-slider/slide-bg2.jpg',
					'image_url2'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/ayroma/assets/images/page-slider/slider-img2.png',
					'title'           => esc_html__( 'Exclusive offers -30% Off', 'ecommerce-companion' ),
					'subtitle'         => esc_html__( 'Cosmetics That Everyone Love!', 'ecommerce-companion' ),
					'subtitle2'         => esc_html__( '$99.03', 'ecommerce-companion' ),
					'text'            => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit alias veritatis placeat tempora aut iure dolorem sunt nostrum porro  dolor.', 'ecommerce-companion' ),
					'text2'	  =>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					"slide_align" => "right", 
					'id'              => 'customizer_repeater_slider_002',
				),
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/ayroma/assets/images/page-slider/slide-bg3.jpg',
					'image_url2'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/ayroma/assets/images/page-slider/slider-img3.png',
					'title'           => esc_html__( 'Exclusive offers -30% Off', 'ecommerce-companion' ),
					'subtitle'         => esc_html__( 'Cosmetics That Everyone Love!', 'ecommerce-companion' ),
					'subtitle2'         => esc_html__( '$99.03', 'ecommerce-companion' ),
					'text'            => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit alias veritatis placeat tempora aut iure dolorem sunt nostrum porro dolor.', 'ecommerce-companion' ),
					'text2'	  =>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					"slide_align" => "left", 
					'id'              => 'customizer_repeater_slider_003',
				)
			)
		)
	);
}


/*
 *
 * Slider 2 Default
 */
 function aromatic_get_slider2_default() {
	return apply_filters(
		'aromatic_get_slider2_default', json_encode(
				 array(
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/aromatic/assets/images/page-slider/banner-slider2.png',
					'title'           => esc_html__( 'new special', 'ecommerce-companion' ),
					'subtitle'         => esc_html__( 'Natural Cosmetics Collection!', 'ecommerce-companion' ),
					'subtitle2'         => esc_html__( '$99.03', 'ecommerce-companion' ),
					'text'            => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing  elit. Sit alias veritatis placeat tempora aut iure dolorem sunt nostrum porro dolor.', 'ecommerce-companion' ),
					'text2'	  =>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_slider2_001',
				),
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/aromatic/assets/images/page-slider/green-bottles.png',
					'title'           => esc_html__( 'new special', 'ecommerce-companion' ),
					'subtitle'         => esc_html__( 'Natural Cosmetics Collection!', 'ecommerce-companion' ),
					'subtitle2'         => esc_html__( '$99.03', 'ecommerce-companion' ),
					'text'            => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit alias veritatis placeat tempora aut iure dolorem sunt nostrum porro dolor.', 'ecommerce-companion' ),
					'text2'	  =>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_slider2_002',
				),
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/aromatic/assets/images/page-slider/cream-tbes.png',
					'title'           => esc_html__( 'new special', 'ecommerce-companion' ),
					'subtitle'         => esc_html__( 'Natural Cosmetics Collection!', 'ecommerce-companion' ),
					'subtitle2'         => esc_html__( '$99.03', 'ecommerce-companion' ),
					'text'            => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing  elit. Sit alias veritatis placeat tempora aut iure dolorem sunt nostrum porro   dolor.', 'ecommerce-companion' ),
					'text2'	  =>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_slider2_003',
				)
			)
		)
	);
}

/*
 *
 * Slider 3 Default
 */
 function aromatic_get_slider3_default() {
	return apply_filters(
		'aromatic_get_slider3_default', json_encode(
				 array(
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/feauty/assets/images/page-slider/banner.png',
					'title'           => esc_html__( 'Beautiful', 'ecommerce-companion' ),
					'subtitle'         => esc_html__( 'Natural Cosmetics For Every Skin!', 'ecommerce-companion' ),
					'subtitle2'         => esc_html__( '$99.03', 'ecommerce-companion' ),
					'text'            => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing  elit. Sit alias veritatis placeat tempora aut iure dolorem sunt nostrum porro dolor.', 'ecommerce-companion' ),
					'text2'	  =>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_slider3_001',
				),
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/feauty/assets/images/page-slider/red-moisturiser.png',
					'title'           => esc_html__( 'Beautiful', 'ecommerce-companion' ),
					'subtitle'         => esc_html__( 'Natural Cosmetics For Every Skin!', 'ecommerce-companion' ),
					'subtitle2'         => esc_html__( '$99.03', 'ecommerce-companion' ),
					'text'            => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing  elit. Sit alias veritatis placeat tempora aut iure dolorem sunt nostrum porro dolor.', 'ecommerce-companion' ),
					'text2'	  =>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_slider3_002',
				),
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/feauty/assets/images/page-slider/white-moisturiser.png',
					'title'           => esc_html__( 'Beautiful', 'ecommerce-companion' ),
					'subtitle'         => esc_html__( 'Natural Cosmetics For Every Skin!', 'ecommerce-companion' ),
					'subtitle2'         => esc_html__( '$99.03', 'ecommerce-companion' ),
					'text'            => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing  elit. Sit alias veritatis placeat tempora aut iure dolorem sunt nostrum porro dolor.', 'ecommerce-companion' ),
					'text2'	  =>  esc_html__( 'Shop Now', 'ecommerce-companion' ),
					'link'	  =>  esc_html__( '#', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_slider3_003',
				)
			)
		)
	);
}




/*
 *
 * Info Default
 */
 function aromatic_get_info_default() {
	return apply_filters(
		'aromatic_get_info_default', json_encode(
				 array(
				array(
					'icon_value'       => 'ja-delivery',
					'title'           => esc_html__( 'Free Delivery', 'ecommerce-companion' ),
					'text'            => esc_html__( 'Free shipping on all order', 'ecommerce-companion' ),
					'link'	  =>  '#',
					'id'              => 'customizer_repeater_info_001',
				),
				array(
					'icon_value'       => 'ja-support',
					'title'           => esc_html__( 'Online Support 24/7', 'ecommerce-companion' ),
					'text'            => esc_html__( 'Support online 24 hours a day', 'ecommerce-companion' ),
					'link'	  =>  '#',
					'id'              => 'customizer_repeater_info_002',
				),
				array(
					'icon_value'       => 'ja-document',
					'title'           => esc_html__( 'Member Discount', 'ecommerce-companion' ),
					'text'            => esc_html__( 'On every order over $200', 'ecommerce-companion' ),
					'link'	  =>  '#',
					'id'              => 'customizer_repeater_info_003',
				),
				array(
					'icon_value'       => 'ja-secure-payment',
					'title'           => esc_html__( '100% Payment Secure', 'ecommerce-companion' ),
					'text'            => esc_html__( 'Your payments are secured', 'ecommerce-companion' ),
					'link'	  =>  '#',
					'id'              => 'customizer_repeater_info_004',
				)
			)
		)
	);
}

/*
 *
 * Info 2 Default
 */
 function aromatic_get_info2_default() {
	return apply_filters(
		'aromatic_get_info2_default', json_encode(
				 array(
				array(
					'icon_value'       => 'ja-delivery',
					'title'           => esc_html__( 'Free Delivery', 'ecommerce-companion' ),
					'text'            => esc_html__( 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.', 'ecommerce-companion' ),
					'link'	  =>  '#',
					'id'              => 'customizer_repeater_info2_001',
				),
				array(
					'icon_value'       => 'ja-support',
					'title'           => esc_html__( 'Online Support 24/7', 'ecommerce-companion' ),
					'text'            => esc_html__( 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.', 'ecommerce-companion' ),
					'link'	  =>  '#',
					'id'              => 'customizer_repeater_info2_002',
				),
				array(
					'icon_value'       => 'ja-document',
					'title'           => esc_html__( 'Member Discount', 'ecommerce-companion' ),
					'text'            => esc_html__( 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.', 'ecommerce-companion' ),
					'link'	  =>  '#',
					'id'              => 'customizer_repeater_info2_003',
				),
				array(
					'icon_value'       => 'ja-secure-payment',
					'title'           => esc_html__( '100% Payment Secure', 'ecommerce-companion' ),
					'text'            => esc_html__( 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.', 'ecommerce-companion' ),
					'link'	  =>  '#',
					'id'              => 'customizer_repeater_info2_004',
				)
			)
		)
	);
}


/*
 *
 * Testimonial Default
 */
 function aromatic_get_testimonial_default() {
	return apply_filters(
		'aromatic_get_testimonial_default', json_encode(
				 array(
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/ayroma/assets/images/testimonial/glow.jpg',
					'title'           => esc_html__( 'Our Member', 'ecommerce-companion' ),
					'subtitle'           => esc_html__( 'Penelope Aria', 'ecommerce-companion' ),
					'subtitle2'           => esc_html__( 'Chief Executive Officer', 'ecommerce-companion' ),
					'text'            => esc_html__( 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet, accusamus? Id eveniet reprehenderit aliquam, in error iure odit obcaecati aspernatur consequuntur corrupti eos doloribus? Ipsam neque nihil aliquam ut  voluptas.', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_testominal_001',
				),
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/ayroma/assets/images/testimonial/beautifulseeatme.jpg',
					'title'           => esc_html__( 'Our Member', 'ecommerce-companion' ),
					'subtitle'           => esc_html__( 'Penelope Aria', 'ecommerce-companion' ),
					'subtitle2'           => esc_html__( 'Chief Executive Officer', 'ecommerce-companion' ),
					'text'            => esc_html__( 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet, accusamus? Id eveniet reprehenderit aliquam, in error iure odit obcaecati aspernatur consequuntur corrupti eos doloribus? Ipsam neque nihil aliquam ut  voluptas.', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_testominal_002',
				),
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/ayroma/assets/images/testimonial/womanseeaobve.jpg',
					'title'           => esc_html__( 'Our Member', 'ecommerce-companion' ),
					'subtitle'           => esc_html__( 'Penelope Aria', 'ecommerce-companion' ),
					'subtitle2'           => esc_html__( 'Chief Executive Officer', 'ecommerce-companion' ),
					'text'            => esc_html__( 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet, accusamus? Id eveniet reprehenderit aliquam, in error iure odit obcaecati aspernatur consequuntur corrupti eos doloribus? Ipsam neque nihil aliquam ut  voluptas.', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_testominal_003',
				)
			)
		)
	);
}



/*
 *
 * Testimonial 3 Default
 */
 function aromatic_get_testimonial3_default() {
	return apply_filters(
		'aromatic_get_testimonial3_default', json_encode(
				 array(
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/feauty/assets/images/testimonial/facemaskwoman.png',
					'title'           => esc_html__( 'Penelope Aria', 'ecommerce-companion' ),
					'subtitle'           => esc_html__( 'Chief Executive Officer', 'ecommerce-companion' ),
					'text'            => esc_html__( 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet, accusamus? Id eveniet reprehenderit aliquam, in error iure odit obcaecati aspernatur consequuntur corrupti eos doloribus? Ipsam neque nihil aliquam ut  voluptas.', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_testominal3_001',
				),
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/feauty/assets/images/testimonial/hipnotizingme.png',
					'title'           => esc_html__( 'Penelope Aria', 'ecommerce-companion' ),
					'subtitle'           => esc_html__( 'Chief Executive Officer', 'ecommerce-companion' ),
					'text'            => esc_html__( 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet, accusamus? Id eveniet reprehenderit aliquam, in error iure odit obcaecati aspernatur consequuntur corrupti eos doloribus? Ipsam neque nihil aliquam ut  voluptas.', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_testominal3_002',
				),
				array(
					'image_url'       => ECOMMERCE_COMP_PLUGIN_URL . 'inc/themes/feauty/assets/images/testimonial/playingeith.png',
					'title'           => esc_html__( 'Penelope Aria', 'ecommerce-companion' ),
					'subtitle'           => esc_html__( 'Chief Executive Officer', 'ecommerce-companion' ),
					'text'            => esc_html__( 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet, accusamus? Id eveniet reprehenderit aliquam, in error iure odit obcaecati aspernatur consequuntur corrupti eos doloribus? Ipsam neque nihil aliquam ut  voluptas.', 'ecommerce-companion' ),
					'id'              => 'customizer_repeater_testominal3_003',
				)
			)
		)
	);
}


/**
 * Aromatic Header Social
 */
if ( ! function_exists( 'aromatic_hdr_social' ) ) {
	function  aromatic_hdr_social() {
		$hs_hdr_social	= get_theme_mod( 'hs_hdr_social','1');
		$hdr_social_ttl	= get_theme_mod( 'hdr_social_ttl',__('Follow us:','ecommerce-companion'));
		$social_icons	= get_theme_mod( 'social_icons',aromatic_get_social_icon_default());
		if($hs_hdr_social=='1' ):
	?>	
			<aside class="widget widget_social_widget">
				<?php if(!empty($hdr_social_ttl)): ?>
					<h6 class="widget-title"><?php echo wp_kses_post($hdr_social_ttl); ?> </h6>
				<?php endif; ?>	
				<ul>
					<?php
						$social_icons = json_decode($social_icons);
						if( $social_icons!='' )
						{
						foreach($social_icons as $social_item){	
						$social_icon = ! empty( $social_item->icon_value ) ? apply_filters( 'aromatic_translate_single_string', $social_item->icon_value, 'Header section' ) : '';	
						$social_link = ! empty( $social_item->link ) ? apply_filters( 'aromatic_translate_single_string', $social_item->link, 'Header section' ) : '';
					?>
						<li><a href="<?php echo esc_url( $social_link ); ?>"><i class="fa <?php echo esc_attr( $social_icon ); ?>"></i></a></li>
					<?php }} ?>
				</ul>
			</aside>
		<?php 
		endif; 
	}
}
add_action( 'aromatic_hdr_social', 'aromatic_hdr_social' );


/**
 * Aromatic Header Social
 */
if ( ! function_exists( 'aromatic_hdr_social2' ) ) {
	function  aromatic_hdr_social2() {
		$hs_hdr_social	= get_theme_mod( 'hs_hdr_social','1');
		$hdr_social_ttl	= get_theme_mod( 'hdr_social_ttl',__('Follow us:','ecommerce-companion'));
		$social_icons	= get_theme_mod( 'social_icons',aromatic_get_social_icon_default());
		if($hs_hdr_social=='1' ):
	?>	
			<aside class="widget widget_social_widget">
				<?php if(!empty($hdr_social_ttl)): ?>
					<h6 class="widget-title"><?php echo wp_kses_post($hdr_social_ttl); ?> </h6>
				<?php endif; ?>	
				<ul>
					<?php
						$social_icons = json_decode($social_icons);
						if( $social_icons!='' )
						{
						foreach($social_icons as $social_item){	
						$social_icon = ! empty( $social_item->icon_value ) ? apply_filters( 'aromatic_translate_single_string', $social_item->icon_value, 'Header section' ) : '';	
						$social_link = ! empty( $social_item->link ) ? apply_filters( 'aromatic_translate_single_string', $social_item->link, 'Header section' ) : '';
					?>
						<li><a href="<?php echo esc_url( $social_link ); ?>"><i class="fa <?php echo esc_attr( aromatic_theme_icon($social_icon )); ?>"></i><i class="fa <?php echo esc_attr( aromatic_theme_icon($social_icon )); ?>"></i></a></li>
					<?php }} ?>
				</ul>
			</aside>
		<?php 
		endif; 
	}
}
add_action( 'aromatic_hdr_social2', 'aromatic_hdr_social2' );


/**
 * Aromatic Header My Account
 */
if ( ! function_exists( 'aromatic_hdr_account' ) ) {
	function aromatic_hdr_account() {
		$hs_hdr_acc 		= get_theme_mod( 'hs_hdr_acc','1');
		$hdr_acc_btn_lbl 	= get_theme_mod( 'hdr_acc_btn_lbl',__('Logout','ecommerce-companion'));
		$hdr_acc_login_lbl 	= get_theme_mod( 'hdr_acc_login_lbl',__('Login','ecommerce-companion'));
		if($hs_hdr_acc=='1'  && class_exists( 'woocommerce' )): ?>
			<div class="my-account bt">
				<?php if(is_user_logged_in()): ?>
					<a href="<?php echo esc_url(wp_logout_url( home_url())); ?>" class="cta-01"><span><?php echo wp_kses_post($hdr_acc_btn_lbl); ?></span></a>
				<?php else: ?>
					<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" class="cta-01"><span><?php echo wp_kses_post($hdr_acc_login_lbl); ?></span></a>
				<?php endif; ?>					
			</div>
		<?php endif;
	}
}
add_action( 'aromatic_hdr_account', 'aromatic_hdr_account' );


/**
 * Aromatic Header Support
 */
if ( ! function_exists( 'aromatic_hdr_support' ) ) {
	function aromatic_hdr_support() {
		$hs_hdr_support 	= get_theme_mod( 'hs_hdr_support','1'); 
		$hdr_support_icon 	= get_theme_mod( 'hdr_support_icon','ja-customer-support'); 
		$hdr_support_content= get_theme_mod( 'hdr_support_content',__('Support: <a href="tel:+91 123 456 7890">+91 123 456 7890</a>','ecommerce-companion')); 
		if($hs_hdr_support == '1') { 
	?>
		<aside class="widget widget-contact">
			<div class="contact-area">
				<?php if(!empty($hdr_support_icon)): ?>
					<div class="contact-icon">
						<div class="contact-corn"><i class="<?php echo esc_attr(aromatic_theme_icon($hdr_support_icon)); ?>"></i></div>
					</div>
				<?php endif; ?>	
				<?php if(!empty($hdr_support_content)): ?>
					<div class="contact-info">
						<?php echo wp_kses_post($hdr_support_content); ?>
					</div>
				<?php endif; ?>
			</div>
		</aside>
	<?php }
	}
}
add_action( 'aromatic_hdr_support', 'aromatic_hdr_support' );



/**
 * Aromatic Login Button
 */
if ( ! function_exists( 'aromatic_hdr_login' ) ) {
	function aromatic_hdr_login() {
		$hs_hdr_login	= get_theme_mod( 'hs_hdr_login','1');
		$hdr_login_icon	= get_theme_mod( 'hdr_login_icon','ja-secure-payment');
		$hdr_login_btn_lbl	= get_theme_mod( 'hdr_login_btn_lbl',__('Login','ecommerce-companion'));
		$hdr_login_btn_link	= get_theme_mod( 'hdr_login_btn_link','#');
		if($hs_hdr_login=='1' ):
		if(!empty($hdr_login_btn_lbl) || !empty($hdr_login_icon)):
	?>	
			<a href="<?php echo esc_url($hdr_login_btn_link); ?>" class="login">
				<?php if(!empty($hdr_login_icon)): ?>
					<span class="icon"><i class="fa <?php echo esc_attr( aromatic_theme_icon($hdr_login_icon )); ?>"></i></span>
				<?php endif; ?>		
				<span><?php echo wp_kses_post($hdr_login_btn_lbl); ?></span>
			</a>
		<?php 
		endif; endif;
	}
}
add_action( 'aromatic_hdr_login', 'aromatic_hdr_login' );


/**
 * 
 * Aromatic Premium Links
 * 
 */
 
 if ( ! function_exists( 'aromatic_premium_links' ) ) :
	function aromatic_premium_links() {
		
		$theme = wp_get_theme(); // gets the current theme
		if( 'Ayroma' == $theme->name){
			$aromatic_premium_url= 'https://sellerthemes.com/ayroma-premium/';
		}elseif( 'Feauty' == $theme->name){
			$aromatic_premium_url= 'https://sellerthemes.com/feauty-premium/';	
		}else{
			$aromatic_premium_url= 'https://sellerthemes.com/aromatic-premium/';
		}	
		return $aromatic_premium_url;
	}
endif;