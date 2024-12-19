<?php
$theme = wp_get_theme(); // gets the current theme
if( 'Express Store' == $theme->name){
	$file = ECOMMERCE_COMP_PLUGIN_URL .'inc/themes/express-store/assets/images/logo.png';
}elseif('Storefit' == $theme->name){
	$file = ECOMMERCE_COMP_PLUGIN_URL .'inc/themes/storefit/assets/images/logo.png';
}else{
	$file = ECOMMERCE_COMP_PLUGIN_URL .'inc/themes/retailsy/assets/images/logo.png';	
}
$PImagePath = ECOMMERCE_COMP_PLUGIN_URL .'inc/themes/storely/assets/images';

$images = array(
$file,
$PImagePath. '/blog/blog-1.jpg',
$PImagePath. '/blog/blog-2.jpg',
$PImagePath. '/blog/blog-3.jpg',
$PImagePath. '/product/product-1.jpg',
$PImagePath. '/product/product-2.jpg',
$PImagePath. '/product/product-3.jpg',
$PImagePath. '/product/product-4.jpg',
$PImagePath. '/product/product-5.jpg',
$PImagePath. '/product/product-6.jpg',
$PImagePath. '/product/product-7.jpg',
$PImagePath. '/product/product-8.jpg'
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
		'post_excerpt' => 'retailsy caption',
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

 update_option( 'retailsy_media_id', $ImageId );

?>
