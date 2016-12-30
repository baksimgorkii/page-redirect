<?php
	/*
	Plugin Name: page redirect
	Plugin URI: http://gorkii.com/
	Description: redirect blank page to sub page
	Version: 0.9
	Author: gorkii
	Author URI: http://gorkii.com/
	License: GPL2
	*/
	require_once(ABSPATH . 'wp-settings.php');
	add_action('get_header', 'redirect');
	function redirect () {
		global $post;
		if (is_page() || is_object($post)) {
			if (get_post_meta($post->ID, 'redirect', true)) {
				header('Location: ' . get_post_meta($post->ID, 'redirect', true));
			}
		}
	}	
?>