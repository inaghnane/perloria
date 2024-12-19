<?php
$theme = wp_get_theme(); // gets the current theme
if( 'Shoply' == $theme->name){
	$file = ECOMMERCE_COMP_PLUGIN_URL .'inc/themes/shoply/assets/images/logo.png';
}elseif('Storess' == $theme->name){
	$file = ECOMMERCE_COMP_PLUGIN_URL .'inc/themes/storess/assets/images/logo.png';
}elseif('Storezia' == $theme->name){
	$file = ECOMMERCE_COMP_PLUGIN_URL .'inc/themes/storezia/assets/images/logo.png';	
}elseif('Shopiva' == $theme->name){
	$file = ECOMMERCE_COMP_PLUGIN_URL .'inc/themes/shopiva/assets/images/logo.png';
}elseif('Shopient' == $theme->name){
	$file = ECOMMERCE_COMP_PLUGIN_URL .'inc/themes/shopient/assets/images/logo.png';
}else{
	$file = ECOMMERCE_COMP_PLUGIN_URL .'inc/themes/storely/assets/images/logo.png';
}
$ImagePath = ECOMMERCE_COMP_PLUGIN_URL .'inc/themes/storely/assets/images';

$images = array(
$file,
$ImagePath. '/blog/blog-1.jpg',
$ImagePath. '/blog/blog-2.jpg',
$ImagePath. '/blog/blog-3.jpg',
$ImagePath. '/product/product-1.jpg',
$ImagePath. '/product/product-2.jpg',
$ImagePath. '/product/product-3.jpg',
$ImagePath. '/product/product-4.jpg',
$ImagePath. '/product/product-5.jpg',
$ImagePath. '/product/product-6.jpg',
$ImagePath. '/product/product-7.jpg',
$ImagePath. '/product/product-8.jpg'
);
$parent_post_id = null;
foreach($images as $name) {
$filename = basename($name);
$upload_file = wp_upload_bits($filename, null, file_get_contents($name));
if (!$upload_file['error']) {
	$wp_filetype = wp_check_filetype($filename, null );
	$attachment = array(
		'post_mime_type' => $wp_filetype['type'],
		'post_parent' => $parent_post_id,
		'post_title' => preg_replace('/\.[^.]+$/', '', $filename),
		'post_excerpt' => 'storely caption',
		'post_status' => 'inherit'
	);
	$ImageId[] = $attachment_id = wp_insert_attachment( $attachment, $upload_file['file'], $parent_post_id );
	
	if (!is_wp_error($attachment_id)) {
		require_once(ABSPATH . "wp-admin" . '/includes/image.php');
		$attachment_data = wp_generate_attachment_metadata( $attachment_id, $upload_file['file'] );
		wp_update_attachment_metadata( $attachment_id,  $attachment_data );
	}
}

}

 update_option( 'storely_media_id', $ImageId );

?>
