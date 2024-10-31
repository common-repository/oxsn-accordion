<?php


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


if ( ! function_exists ( 'oxsn_accordion_inc_css' ) ) {

	add_action( 'wp_enqueue_scripts', 'oxsn_accordion_inc_css' );
	function oxsn_accordion_inc_css() {

		wp_enqueue_style( 'oxsn_accordion_etc_css', oxsn_accordion_plugin_dir_url . 'inc/css/etc.css', array(), '0.0.1', 'all' ); 

	}

}

if ( ! function_exists ( 'oxsn_accordion_inc_js' ) ) {

	add_action( 'wp_enqueue_scripts', 'oxsn_accordion_inc_js' );
	function oxsn_accordion_inc_js() {

		wp_enqueue_script( 'oxsn_accordion_etc_js', oxsn_accordion_plugin_dir_url . 'inc/js/etc.js', array(), '0.0.1', 'all' ); 

	}

}


?>