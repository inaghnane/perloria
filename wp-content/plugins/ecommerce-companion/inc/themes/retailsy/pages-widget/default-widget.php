<?php
$theme = wp_get_theme();
if( 'Express Store' == $theme->name){
	$retailsy_logo_url = ECOMMERCE_COMP_PLUGIN_URL .'inc/themes/express-store/assets/images/footerlogo.png';
}elseif('Storefit' == $theme->name){
	$retailsy_logo_url = ECOMMERCE_COMP_PLUGIN_URL .'inc/themes/storefit/assets/images/footerlogo.png';
}else{
	$retailsy_logo_url = ECOMMERCE_COMP_PLUGIN_URL .'inc/themes/retailsy/assets/images/footerlogo.png';
}

$activate = array(
        'retailsy-sidebar-primary' => array(
            'search-1',
            'recent-posts-1',
            'archives-1',
        ),
		'retailsy-footer-widget' => array(
			'text-1',
            'categories-1',
            'archives-1',
			'search-1',
        ),
		'retailsy-header-above-first' => array(
			'info-widget-3'
		),
		'retailsy-header-above-second' => array(
			'social_widget-2'
		),
		
    );
    /* the default titles will appear */
		update_option('widget_text', array(  
		1 => array('title' => '',
        'text'=>'<a href="#" class="logo"><img src="'.esc_url($retailsy_logo_url).'"></a>
                            <div class="textwidget">
                                <p class="about-template">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                                    quas recusandae
                                    explicabo
                                    voluptatibus dolor esse voluptates,.</p>
                                <aside class="widget widget_social_widget">
                                    <ul>
                                        <li><a href="#" class="active"><i class="fa fa-facebook"></i><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </aside>
                            </div>'),		
		2 => array('title' => 'Recent Posts'),
		3 => array('title' => 'Categories'), 
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
	$MediaId = get_option('retailsy_media_id');
	set_theme_mod( 'custom_logo', $MediaId[0] );
	set_theme_mod('browse_cat_ttl',__('<i class="fa fa-list-ul"></i> Browse Categories','ecommerce-companion'));
	set_theme_mod('hdr_contact_ttl',__('+12 348 567 90','ecommerce-companion'));
	set_theme_mod('hdr_contact_url','#');
	set_theme_mod('blog2_ttl',__('Latest Blogs','ecommerce-companion'));
	set_theme_mod('hdr_cart_ttl',__('Cart','ecommerce-companion'));
?>