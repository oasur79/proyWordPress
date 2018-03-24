<?php

/*
Plugin Name: oas_codigo_corto_diad
Plugin URI: www.google.com
Description: Este plugin sirve para mediante un codigo corto por ejemplo "lot" colocar 
             un comando que se ejecute en el cuerpo 
Author: Oscar Apaza 
Version: 1.0 
Author URI: 
Licence: GPL2

*/

add_action('init','oas_codigo_corto_diad');

if(!function_exists("oas_codigo_corto_diad"))
{
    function oas_codigo_corto_diad()
    {
        
        add_shortcode('diad','diad');
    }
}
if(!function_exists("diad"))
{
    function diad($args,$content)
    {
        return "<p><a href=http://www.eldia.com.bo>www.eldia.com.bo</a></p>".$content;
        
    }
}


