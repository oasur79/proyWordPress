<?php
/*
Plugin Name: oas_widget
Plugin URI: www.google.com
Description: Este plugin es un widget
Author: Oscar Apaza 
Version: 1.0 
Author URI: 
Licence: GPL2
*/

require_once("oas_widget_class.php");
add_action("widgets_init","oas_widget_carga");
if(!function_exists("oas_widget_carga"))
{
    function oas_widget_carga()
    {
        register_widget("oas_widget_class");
    }
}