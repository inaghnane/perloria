<?php
$theme = wp_get_theme();
if( 'Flow Store' == $theme->name){
	$flossy_logo_url = ECOMMERCE_COMP_PLUGIN_URL .'inc/themes/flow-store/assets/images/logo-dark.png';
}else if( 'Flexi Mart' == $theme->name){
	$flossy_logo_url = ECOMMERCE_COMP_PLUGIN_URL .'inc/themes/flexi-mart/assets/images/logo.png';
}else{
	$flossy_logo_url = ECOMMERCE_COMP_PLUGIN_URL .'inc/themes/flossy/assets/images/logo.png';
}

$activate = array(
        'flossy-sidebar-primary' => array(
            'search-1',
            'recent-posts-1',
            'archives-1',
        ),
		'flossy-footer-widget' => array(
			'text-1',
            'categories-1',
            'archives-1',
			'text-2',
        )
		
    );
    /* the default titles will appear */
		update_option('widget_text', array(  
		1 => array('title' => '',
        'text'=>'<div id="contact_widget-2" class="contact_feature">			
					<div class="logo">
						<a href="#">
							<img src="'.$flossy_logo_url.'" alt="Logo Image">
						</a>
					</div>
					<aside class="widget widget-contact heads">
						<div class="contact-area">
							<div class="contact-icon">
								<i class="fa fa-map-marker"></i>
							</div>
							<div class="contact-info">
								<p class="text"><a href="#">50 Nayra House, India</a></p>
							</div>
						</div>
						<div class="contact-area">
							<div class="contact-icon">
								<i class="fa fa-mobile-phone"></i>
							</div>
							<div class="contact-info">
								<p class="text"><a href="tel:+7097597570">+70 975 975 70</a></p>
							</div>
						</div>
						<div class="contact-area">
							<div class="contact-icon">
								<i class="fa fa-envelope"></i>
							</div>
							<div class="contact-info">
								<p class="text"><a href="mailto:http://email@company.com"><span class="__cf_email__">email@company.com</span></a>
								</p>
							</div>
						</div>
					</aside>
				</div>'),		
		2 => array('title' => '',
		'text'=>'<aside id="search-3" class="widget widget_mail">
					<h5 class="widget-title">Join Our Mailing List</h5>
					<p>Subscribe To Our Newsletter and Get 10% Off Your First Purchase</p>
					<form method="get" class="mail-form" action="/">
					<label>
					<span class="screen-reader-text">Search for:</span>
					<input type="email" class="mail-field" placeholder="Email Address..." value="" name="e">
					</label>
					<button type="submit" class="submit">Subscribe</button>
					</form>
				</aside>'), 
		3 => array('title' => 'Recent Posts'),
		4 => array('title' => 'Categories'), 
        ));
		 update_option('widget_categories', array(
			1 => array('title' => 'Categories'), 
			2 => array('title' => 'Categories')));

		update_option('widget_archives', array(
			1 => array('title' => 'Archives'), 
			2 => array('title' => 'Archives')));
			
		update_option('widget_search', array(
			1 => array('title' => 'Search'), 
			2 => array('title' => 'Search')));	
		
    update_option('sidebars_widgets',  $activate);
	$MediaId = get_option('flossy_media_id');
	set_theme_mod( 'custom_logo', $MediaId[0] );
	set_theme_mod('browse_cat_ttl',__('<i class="fa fa-list-ul"></i> Browse Categories','ecommerce-companion'));
	set_theme_mod('hdr_contact_ttl','+12 348 567 90');
	set_theme_mod('hdr_contact_url','#');
	set_theme_mod('blog2_ttl',__('Latest Blogs','ecommerce-companion'));
	set_theme_mod('hdr_cart_ttl',__('Cart','ecommerce-companion'));
	set_theme_mod('hdr_cart_close', __('CLOSE','ecommerce-companion'));
	
	set_theme_mod('hide_show_offer_code','1');		
	set_theme_mod('hdr_offer_code_lbl','OFF50%');
	set_theme_mod('hide_show_contact_us','1');		
	set_theme_mod('hdr_contact_us_title',__('Call Us'));		
	set_theme_mod('hdr_contact_us_number','+70 975 975 70');		
	set_theme_mod('hdr_contact_us_icon','fa fa-phone');
?>