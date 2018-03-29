<?php
// WordPress: Strips information out of head
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

// WordPress: Disable WordPress Admin Bar for all users
show_admin_bar(false);

// WordPress: Disable WP Emojicons
add_action('init','disable_wp_emojicons');
function disable_wp_emojicons(){
  // all actions related to emojis
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

  // filter to remove TinyMCE emojis
  add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
  
	function disable_emojicons_tinymce($plugins){
		if (is_array($plugins)) {
			return array_diff($plugins, array('wpemoji'));
		} else {
			return array();
		}
	}
}

// WordPress: Removes the default Post types from the admin section
add_action( 'admin_menu', 'remove_menus' );
function remove_menus(){
	// Removes for Everyone
	remove_menu_page('edit.php');                   //Posts
	remove_menu_page('edit-comments.php');          //Comments
	
	// Removes for non-Admin Users
	if(!current_user_can('update_core')) {
		remove_menu_page('tools.php');					//Tools
	}
}

// WordPress: Add slug name to body class
add_filter('body_class','add_body_class');
function add_body_class($classes){
	global $post;
	if (isset($post)){
		$classes[] = $post->post_type.'-'.$post->post_name;
	}
	return $classes;
}

// WordPress: Sets the number of pages to show in Admin View
add_filter('get_user_metadata','pages_per_page_wpse_23503', 10, 4);
function pages_per_page_wpse_23503($check, $object_id, $meta_key, $single){ 
	if('edit_page_per_page' == $meta_key){
		return 50;
	} else {
		return $check;
	}
}

// WordPress: Prevents Thumbnail Generation of uploaded images
add_filter('intermediate_image_sizes_advanced','add_image_insert_override');
function add_image_insert_override($sizes){
	//unset($sizes['thumbnail']);
	unset($sizes['medium']);
	unset($sizes['medium_large']);
	unset($sizes['large']);
	return $sizes;
}

// WordPress: Forces lowercase on all files uploaded to the Media Library
add_filter('sanitize_file_name', 'media_library_filename_lowercase', 10);
function media_library_filename_lowercase($filename){
	$info = pathinfo($filename);
	$ext  = empty($info['extension']) ? '' : '.' . $info['extension'];
	$name = basename($filename, $ext);
	return strtolower($name) . $ext;
}

// WordPress: Forces page templates to load without needing to set template type
add_filter('template_include', 'force_page_template', 99);
function force_page_template($template){
	global $post;

	if (is_front_page() || is_page('home')){//Front Page must be assigned in Setting > Reading
		$new_template = locate_template(array('page-template-home.php'));
		if ('' != $new_template) {return $new_template;}
	}
	if (is_page('select-your-plan')){
		$new_template = locate_template(array('page-template-select-your-plan.php'));
		if ('' != $new_template) {return $new_template;}
	}
	if (is_page('terms-and-conditions')){
		$new_template = locate_template(array('page-template-terms-and-conditions.php'));
		if ('' != $new_template) {return $new_template;}
	}
	if (is_page('privacy-policy')){
		$new_template = locate_template(array('page-template-privacy-policy.php'));
		if ('' != $new_template) {return $new_template;}
	}
	if (is_page('refund-policy')){
		$new_template = locate_template(array('page-template-refund-policy.php'));
		if ('' != $new_template) {return $new_template;}
	}
	return $template;
}
?>
