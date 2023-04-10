<?php
/**
 * @package Test
 * @version 1.1.1.0
 */
/*
Plugin Name: Plugin Test
Plugin URI: http://localhost:8080/wordpress/plugins/plugin-test/
Description: probando
Author: Gino Ricardo
Version: 1.0.0
Author URI: http://ma.tt/
 */
add_action( 'admin_bar_menu', 'menu_superior', 100 );

function menu_superior($bar){
if(!current_user_can('manage_options')) return;

$bar->add_menu(array(
'id'=>'borrar_cache',
'title'=>'borrar_cache',
'href'=>'#',
'parent'=>'',


));

}
