<?php

/**
 * Hides the 'view' button in the post edit page
 *
 */
function hv_hide_view_button() {

	$current_screen = get_current_screen();

	if( $current_screen->post_type === 'post-type' ) {
		echo '<style>#edit-slug-box{display: none;}</style>';
	}
	
	return;

}
add_action( 'admin_head', 'hv_hide_view_button' );

/**
 * Removes the 'view' link in the admin bar
 *
 */
function hv_remove_view_button_admin_bar() {

	global $wp_admin_bar;

	if( get_post_type() === 'post-type'){
