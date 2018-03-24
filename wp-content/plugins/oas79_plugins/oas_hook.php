<?php

/*
Plugin Name: oas_hook
Plugin URI: www.google.com
Description: Este plugin es un hook para cambiar de ingles a español o viceversa 
Author: Oscar Apaza 
Version: 1.0 
Author URI: 
Licence: GPL2

*/

add_action('publish_post','add_Tag');
function add_Tag()
{
	$post_ID = get_the_ID();
	$tags=array('Ingles', 'Espanol');
	wp_set_post_tags($post_ID,$tags,true);
}
?>