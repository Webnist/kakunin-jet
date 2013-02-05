<?php
/*
  Plugin Name: Kakunin jet
  Plugin URI: http://plugins.webnist.net/
  Description:
  Version: 0.7.1.0
  Author: Webnist
  Author URI: http://webni.st
  License: GPLv2 or later
*/

if ( ! defined( 'KAKUNIN_PLUGIN_URL' ) )
	define( 'KAKUNIN_PLUGIN_URL', plugins_url() . '/' . dirname( plugin_basename( __FILE__ ) ));

if ( ! defined( 'KAKUNIN_PLUGIN_DIR' ) )
	define( 'KAKUNIN_PLUGIN_DIR', WP_PLUGIN_DIR . '/' . dirname( plugin_basename( __FILE__ ) ));

//stylesheetの登録
add_action( 'wp_print_styles', 'add_kakunin_style' );
function add_kakunin_style() {
	if ( !is_admin() && ( is_home() || is_front_page() ) ) {
		wp_enqueue_style( 'kakunin-style', KAKUNIN_PLUGIN_URL . '/css/style.css' );
	}
}

add_action( 'wp_footer', 'kakunin_content' );
function kakunin_content() {
	echo <<< EOT
	<div class="kakunin">
		<div class="kakunin-one"></div>
		<div class="kakunin-two"></div>
		<div class="kakunin-three"></div>
	</div>
EOT;
}
