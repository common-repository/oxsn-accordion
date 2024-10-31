<?php


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


//[oxsn_accordion_title class=""]
if ( ! function_exists ( 'oxsn_accordion_title_shortcode' ) ) {

	add_shortcode( 'oxsn_accordion_title', 'oxsn_accordion_title_shortcode' );
	function oxsn_accordion_title_shortcode( $atts, $content = null ) {
		$content = wpautop(trim($content));
		$a = shortcode_atts( array(
			'class' => '',
		), $atts );

		$oxsn_accordion_title_class = esc_attr($a['class']);

		return '<div class="oxsn_accordion_title ' . $oxsn_accordion_title_class . '">' . do_shortcode($content) . '</div>';

	}

}

//[oxsn_accordion_inactive_icon class=""]
if ( ! function_exists ( 'oxsn_accordion_inactive_icon_shortcode' ) ) {

	add_shortcode( 'oxsn_accordion_inactive_icon', 'oxsn_accordion_inactive_icon_shortcode' );
	function oxsn_accordion_inactive_icon_shortcode( $atts, $content = null ) {
		$content = wpautop(trim($content));
		$a = shortcode_atts( array(
			'class' => '',
		), $atts );

		$oxsn_accordion_inactive_icon_class = esc_attr($a['class']);

		return '<div class="oxsn_inactive_icon ' . $oxsn_accordion_inactive_icon_class . '">' . do_shortcode($content) . '</div>';

	}

}

//[oxsn_accordion_active_icon class=""]
if ( ! function_exists ( 'oxsn_accordion_active_icon_shortcode' ) ) {

	add_shortcode( 'oxsn_accordion_active_icon', 'oxsn_accordion_active_icon_shortcode' );
	function oxsn_accordion_active_icon_shortcode( $atts, $content = null ) {
		$content = wpautop(trim($content));
		$a = shortcode_atts( array(
			'class' => '',
		), $atts );

		$oxsn_accordion_active_icon_class = esc_attr($a['class']);

		return '<div class="oxsn_active_icon ' . $oxsn_accordion_active_icon_class . '">' . do_shortcode($content) . '</div>';

	}

}

//[oxsn_accordion_content class=""]
if ( ! function_exists ( 'oxsn_accordion_content_shortcode' ) ) {

	add_shortcode( 'oxsn_accordion_content', 'oxsn_accordion_content_shortcode' );
	function oxsn_accordion_content_shortcode( $atts, $content = null ) {
		$content = wpautop(trim($content));
		$a = shortcode_atts( array(
			'class' => '',
		), $atts );

		$oxsn_accordion_content_class = esc_attr($a['class']);

		return '<div class="oxsn_accordion_content ' . $oxsn_accordion_content_class . '">' . do_shortcode($content) . '</div>';

	}

}


?>