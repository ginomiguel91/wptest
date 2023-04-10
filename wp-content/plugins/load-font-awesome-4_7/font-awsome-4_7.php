<?php 
/**
 * Plugin Name: Load Font awesome 4.7
 * Plugin URI: https://pablomonteserin.com
 * Description: This plugin loads font awesome css
 * Version: 1.0.0
 * Author: Pablo Monteserín
 * Author URI: https://pablomonteserin.com
 * License: GPL2
 */


add_action('wp_enqueue_scripts', 'loadfontawesomecss', 999);

function loadfontawesomecss(){

$plugin_url_ForFontAwesome = plugin_dir_url( __FILE__ );

	wp_register_style( 'fontawesomecss', $plugin_url_ForFontAwesome."includes/css/font-awesome.min.css");
	wp_enqueue_style( 'fontawesomecss');
}


?>